<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * DekaProgramms
 *
 * @ORM\Table(name="deka_programms")
 * @ORM\Entity
 * @Annotation\Name("deka_programms")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class DekaProgramms extends DekaBasic
{
/**
     * @var \Inventory\Entity\DekaProgramms
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaProgramms")
     * @ORM\JoinColumn(name="parentid", referencedColumnName="id", nullable=true)
     * @Annotation\Exclude()
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":20}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Код"})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaStatus")
     * @ORM\JoinColumn(name="status", referencedColumnName="id", nullable=false)
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
	 * @Annotation\Options({
	 * "label":"Статус",
	 * "target_class":"Inventory\Entity\DekaStatus",
	 * "property": "name"})
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaDepartments")
     * @ORM\JoinColumn(name="departmentid", referencedColumnName="id", nullable=false)
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
	 * @Annotation\Options({
	 * "label":"Подразделение",
	 * "target_class":"Inventory\Entity\DekaDepartments",
	 * "property": "name"})
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text", nullable=true)
     * @Annotation\Attributes({"type":"textarea"})
     * @Annotation\Options({"label":"Заметки"})
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="agenums", type="smallint", nullable=true)
     * @Annotation\Attributes({"type":"number"})
     * @Annotation\Options({"label":"Количество параллелей"})
     */
    private $agenums;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="bigint", nullable=true)
     * @Annotation\Attributes({"type":"number"})
     * @Annotation\Options({"label":"Длительность обучения (Дней)"})
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="ahours", type="bigint", nullable=true)
     * @Annotation\Attributes({"type":"number"})
     * @Annotation\Options({"label":"Длительность обучения (Ак. часов)"})
     */
    private $ahours;

    /**
     * @var string
     *
     * @ORM\Column(name="billingtext", type="text", nullable=true)
     * @Annotation\Exclude()
     */
    private $billingtext;

    /**
     * @var string
     *
     * @ORM\Column(name="billingrules", type="text", nullable=true)
     * @Annotation\Exclude()
     */
    private $billingrules;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flowagenums", type="boolean", nullable=true)
     * @Annotation\Attributes({"type":"checkbox"})
     * @Annotation\Options({"label":"Плавающие учебные планы"})
     */
    private $flowagenums;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edulevel", type="boolean", nullable=true)
     * @Annotation\Exclude()
     */
    private $edulevel;

 public function getParentid(){
  return $this->parentid;
 }

 public function setParentid($parentid){
  $this->parentid = $parentid;
 }

 public function getCode(){
  return $this->code;
 }

 public function setCode($code){
  $this->code = $code;
 }

 public function getStatus(){
  return $this->status;
 }

 public function setStatus($status){
  $this->status = $status;
 }

 public function getDepartmentid(){
  return $this->departmentid;
 }

 public function setDepartmentid($departmentid){
  $this->departmentid = $departmentid;
 }

 public function getNotice(){
  return $this->notice;
 }

 public function setNotice($notice){
  $this->notice = $notice;
 }

 public function getAgenums(){
  return $this->agenums;
 }

 public function setAgenums($agenums){
  $this->agenums = $agenums;
 }

 public function getDuration(){
  return $this->duration;
 }

 public function setDuration($duration){
  $this->duration = $duration;
 }

 public function getAhours(){
  return $this->ahours;
 }

 public function setAhours($ahours){
  $this->ahours = $ahours;
 }

 public function getBillingtext(){
  return $this->billingtext;
 }

 public function setBillingtext($billingtext){
  $this->billingtext = $billingtext;
 }

 public function getBillingrules(){
  return $this->billingrules;
 }

 public function setBillingrules($billingrules){
  $this->billingrules = $billingrules;
 }

 public function getFlowagenums(){
  return $this->flowagenums;
 }

 public function setFlowagenums($flowagenums){
  $this->flowagenums = $flowagenums;
 }

 public function getEdulevel(){
  return $this->edulevel;
 }

 public function setEdulevel($edulevel){
  $this->edulevel = $edulevel;
 }

}
