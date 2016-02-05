<?php
/**
 * BjyAuthorize Module (https://github.com/bjyoungblood/BjyAuthorize)
 *
 * @link https://github.com/bjyoungblood/BjyAuthorize for the canonical source repository
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */
namespace MyUser\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Zend\Form\Annotation;

/**
 * An example of how to implement a role aware user entity.
 *
 * @ORM\Entity
 * @ORM\Table(name="orp")
 * 
 * @Annotation\Name("orp")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 *
 */
class ObjectRepositoryProvider
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Annotation\Exclude()
     */
    protected $id;
    
    /**
     * @var string
     * @var \MyUser\Entity\Role
     * @ORM\ManyToOne(targetEntity="MyUser\Entity\Role")
     * @ORM\JoinColumn(name="role", referencedColumnName="id")
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Required(false)
	 * @Annotation\Options({
	 * "label":"Роль",
	 * "target_class":"MyUser\Entity\Role",
	 * "property": "roleId"})
     */
    protected $role;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Имя контроллера"})
     */
    protected $controller;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":50}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Имя действия"})
     */
    protected $action;
    
    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     * @Annotation\Exclude()
     */
    protected $isHidden = 0;
    

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id.
     *
     * @param int $id
     *
     * @return void
     */
    public function setId($id)
    {
        $this->id = (int) $id;
    }
    
    /**
     * Get role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role.
     *
     * @param string $role
     *
     * @return void
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
    
    /**
     * Get controller.
     *
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }
    /**
     * Set controller.
     *
     * @param string $controller
     *
     * @return void
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }
    /**
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action.
     *
     * @param string $action
     *
     * @return void
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
    
    /**
     * Get isHidden.
     *
     * @return int
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }
    /**
     * Set isHidden.
     *
     * @param int $isHidden
     *
     * @return void
     */
    public function setIsHidden($isHidden)
    {
        $this->isHidden = (int) $isHidden;
    }
    
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}