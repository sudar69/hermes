<?php
namespace MyUser\Provider\Rule;

use Doctrine\Common\Persistence\ObjectRepository;
use BjyAuthorize\Provider\Rule\ProviderInterface;

/**
 * Guard provider based on a {@see \Doctrine\Common\Persistence\ObjectRepository}
 */
class DoctrineRuleProvider implements ProviderInterface
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    protected $objectRepository;

    /**
     * @param \Doctrine\Common\Persistence\ObjectRepository $objectRepository            
     */
    public function __construct(ObjectRepository $objectRepository)
    {
        $this->objectRepository = $objectRepository;
    }

    /**
     * Here we read rules from DB and put them into an a form that BjyAuthorize's Controller.php understands
     */
    public function getRules()
    {
        //read from object store a set of (role, controller, action) 
        $result = $this->objectRepository->findAll();
        
        //transform to object BjyAuthorize will understand
        $rules = array();
        foreach ($result as $key => $rule)
        {
            $role=$rule->getRole()->getRoleId();
            $controller=$rule->getController();
            $action=$rule->getAction();            

            if ($action==='all')    //action is ommitted
            {
                $rules[$controller]['roles'][] = $role;
                $rules[$controller]['controller'] = array($controller);
            }
            else
            {
                $rules[$controller.':'.$action]['roles'][]=$role;
                $rules[$controller.':'.$action]['controller']=array($controller);
                $rules[$controller.':'.$action]['action']=array($action);
            }                       
        }    

        return array_values($rules);
    }
}