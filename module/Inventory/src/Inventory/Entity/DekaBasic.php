<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Hgroups
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 * @Annotation\Name("deka_programms")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class DekaBasic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Annotation\Exclude()
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Название"})
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Описание"})
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     * @Annotation\Exclude()
     */
    private $url;
    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="createdwhen", type="datetime", nullable=true)
     * @Annotation\Attributes({"type":"Zend\Form\Element\DateTime", "id": "CREATEDWHEN", "min":"2010-01-01T00:00:00Z", "max":"2020-01-01T00:00:00Z", "step":"1", "readonly":"true"})
     * @Annotation\Options({"label":"Date\Time:", "format":"Y-m-d\TH:iP"})	 
     */ 
    private $createdWhen;
    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="modifiedwhem", type="datetime", nullable=true)
     * @Annotation\Attributes({"type":"Zend\Form\Element\DateTime", "id": "MODIFIEDBY", "min":"2010-01-01T00:00:00Z", "max":"2020-01-01T00:00:00Z", "step":"1"})
     * @Annotation\Options({"label":"Date\Time:", "format":"Y-m-d\TH:iP"})	 
     */ 
    private $modifiedBy;
    
    public function __construct() {
        $this->createdWhen = new \DateTime();
        $this->modifiedBy = new \DateTime();
    }
    
 public function getId(){
  return $this->id;
 }

 public function setId($id){
  $this->id = $id;
 }

 public function getName(){
  if ($this->name === null) return "Без имени";
  return $this->name;
 }

 public function setName($name){
  $this->name = $name;
 }

 public function getDescription(){
  return $this->description;
 }

 public function setDescription($description){
  $this->description = $description;
 }

 public function getUrl(){
  return $this->url;
 }

 public function setUrl($url){
  $this->url = $url;
 }

 public function getCreatedWhen(){
  return $this->createdWhen;
 }

 public function setCreatedWhen($createdWhen){
  $this->createdWhen = $createdWhen;
 }

 public function getModifiedBy(){
  return $this->modifiedBy;
 }

 public function setModifiedBy($modifiedBy){
  $this->modifiedBy = $modifiedBy;
 }
 
    /**
     * Helper function.
     */
    public function exchangeArray($data)
    {
        foreach ($data as $key => $val) {
            if (property_exists($this, $key)) {
                $this->$key = (!empty($val)) ? $val : null;
            }
        }
    }
    /**
     * Helper function
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
 
}