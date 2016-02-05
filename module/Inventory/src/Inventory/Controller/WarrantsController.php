<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

use MyUser\Entity\Role;
use MyUser\Entity\ObjectRepositoryProvider;

class WarrantsController extends BasicActions
{
    
    public function __construct() {
    	$this->setMyObject(new Role);
    	$this->setMyEntity('MyUser\Entity\Role');
    	$this->setMyName("Data.roleId");
    	$this->setMyIndex(array( 'Id' => 'id',
    	                        'Наименование' => 'roleId',
    	                        'Родительская роль' => 'parent',
    	                        ));
    }
    
    public function jsonAction()
    {
    	$id = (int) $this->params()->fromRoute('id', 1);
        if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
    	
    	$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
    	$queryBuilder = $em->createQueryBuilder();
		$queryBuilder->select(array('IDENTITY(t.parent) as parent', 't.id', 't.roleId'))
		             ->from($this->getMyEntity(), 't')
		             ->where('t.parent = ?1')
		             ->setParameter(1, $id);
		
		$results = $queryBuilder->getQuery()
		                        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);

		return new JsonModel(array(
        			'data' => $results,
        		));
    }
    
    public function getForm($article, $entityManager, $action)
	{
	    $form = parent::getForm($article, $entityManager, $action);
	    $form->remove('__initializer__');
	    $form->remove('__cloner__');
	    $form->remove('__isInitialized__');
	    $form->remove('lazyPropertiesDefaults');
	    return $form;
	}
    
    public function checkAction()
    {
        
        $id = (int) $this->params()->fromRoute('id');
        if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $repository = $entityManager->getRepository($this->getMyEntity());
		$role = $repository->find($id);
			
        $request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
			foreach ($post->getArrayCopy() as $key => $value) {
			    if ($key !== 'send') {
			        $pieces = explode("_", $key);
			        $controller = $pieces[0];
			        $action = str_replace("Action", "", $pieces[1]);
			        if ($this->getStatusAct($id, $controller, $action) !== "checked") {
			            $orp = new ObjectRepositoryProvider();
			            $orp->setRole($role);
			            $orp->setController($controller);
			            $orp->setAction($action);
			            $entityManager->persist($orp);
				        $entityManager->flush();
			        }
			    }
			}
        }
        
        $temp__ = $this->getAllAct();
        $marray = null;
        $marray[] = $temp__[1];
        foreach ($temp__[0] as $key => $value) {
            $row = null;
            $row[] = $key;
            foreach ($temp__[1] as $key2 =>  $value2) {
                if(array_search($value2, $value) !== FALSE) {
                    $row[] = '<div class="checkbox text-center"><label><input name="'.$key.'_'.$value2.'" id="'.$key.'_'.$value2.'" type="checkbox" '.$this->getMyRoleId($id, $key, $value2).'></label></div>';
                } else {
                    $row[] = null;
                }
            }
            $marray[] = $row;
        }
        //var_dump($this->getMyRoleId(2, 'Inventory\Controller\Warrants', 'indexAction'));
        return new ViewModel(array(
            'data' => $marray,
            'id' => $id,
        ));
    }
    
    
    private function getMyRoleId($id = null, $controller, $action_, $disabled = null)
    {
        if ($id == null) {
            $authorize = $this->getServiceLocator()->get('BjyAuthorize\Provider\Identity\ProviderInterface');
            $arrMyRoles = $authorize->getIdentityRoles();
            $myRoles = $arrMyRoles[0];
        } else {
            $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
            $repository = $entityManager->getRepository($this->getMyEntity());
    		$myRoles = $repository->find($id);
        }
		$data = $this->getStatusAct($myRoles->getId(), $controller, $action_);
		
		$myParentRole = $myRoles->getParent();
        if ($myParentRole !== null) {
            $data_ = $this->getMyRoleId($myParentRole->getId(), $controller, $action_, ' disabled');
        }
        if ($data == null) {
            $data = $data_;
        } else {
            $data = $data.' '.$disabled;
        }
        return $data;
    }
    
    private function getMyRoles($myRoles = null)
    {
        if ($myRoles == null) {
            $authorize = $this->getServiceLocator()->get('BjyAuthorize\Provider\Identity\ProviderInterface');
            $arrMyRoles = $authorize->getIdentityRoles();
            $myRoles = $arrMyRoles[0];
        }
        var_dump($myRoles->getRoleId());
        
        $myParentRole = $myRoles->getParent();
        if ($myParentRole !== null) {
            $this->getMyRoles($myParentRole);
        }
        
    }
    
    private function getStatusAct($id, $controller, $action_)
    {
		$action = str_replace("Action", "", $action_);
		
    	$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
    	$queryBuilder = $em->createQueryBuilder();
		$queryBuilder->select(array('t'))
		             ->from('MyUser\Entity\ObjectRepositoryProvider', 't')
		             ->where('t.role = ?1 and t.controller = ?2 and t.action = ?3')
		             ->setParameter(1, $id)
		             ->setParameter(2, $controller)
		             ->setParameter(3, $action);
		
		$results = $queryBuilder->getQuery()
		                        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
		if (!empty($results)) {
		    $data = 'checked';
		}

		return $data;
    }
    
    private function getAllAct()
    {
        
        $manager        = $this->getServiceLocator()->get('ModuleManager');
        $modules        = $manager->getLoadedModules();
        $loadedModules      = array_keys($modules);
        $skipActionsList    = array('notFoundAction', 'getMethodFromAction');
        $allActions = array();
        $allControllers = array();

        $loadedModule = 'Inventory';
        //foreach ($loadedModules as $loadedModule) {
            $moduleClass = '\\' .$loadedModule . '\Module';
            $moduleObject = new $moduleClass;
            $config = $moduleObject->getConfig();
        
            $controllers = $config['controllers']['invokables'];

            foreach ($controllers as $key => $moduleClass) {
                $tmpArray = get_class_methods($moduleClass);
                $controllerActions = array();
                foreach ($tmpArray as $action) {
                    if (substr($action, strlen($action)-6) === 'Action' && !in_array($action, $skipActionsList)) {
                        $controllerActions[] = $action;
                    }
                }
            //$allActions[] = $controllerActions;
            $allControllers[$key] = $controllerActions;
            $allActions = array_merge($allActions, $controllerActions);
            $allActions = array_unique($allActions);
            }
        //}
        return array($allControllers, $allActions);
    }
}