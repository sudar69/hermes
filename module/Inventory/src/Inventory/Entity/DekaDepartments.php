<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * deka_departments
 *
 * @ORM\Table(name="deka_departments")
 * @ORM\Entity
 * @Annotation\Name("deka_departments")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class DekaDepartments extends DekaBasic
{
    /**
     * @var \Inventory\Entity\DekaDepartments
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaDepartments")
     * @ORM\JoinColumn(name="parentid", referencedColumnName="id", nullable=true)
     * @Annotation\Exclude()
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":20}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Кодовое название"})
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="managerid", type="bigint", nullable=true)
     */
    private $managerid;

    /**
     * @var \Inventory\Entity\DekaAddresses
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaAddresses")
     * @ORM\JoinColumn(name="addressid", referencedColumnName="id", nullable=true)
     * @Annotation\Exclude()
     */
    private $addressid;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=100, nullable=true)
     */
    private $zone;

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
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="bigint", nullable=true)
     */
    private $depth;

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

 public function getManagerid(){
  return $this->managerid;
 }

 public function setManagerid($managerid){
  $this->managerid = $managerid;
 }

 public function getAddressid(){
  return $this->addressid;
 }

 public function setAddressid($addressid){
  $this->addressid = $addressid;
 }

 public function getZone(){
  return $this->zone;
 }

 public function setZone($zone){
  $this->zone = $zone;
 }

 public function getStatus(){
  return $this->status;
 }

 public function setStatus($status){
  $this->status = $status;
 }

 public function getPath(){
  return $this->path;
 }

 public function setPath($path){
  $this->path = $path;
 }

 public function getDepth(){
  return $this->depth;
 }

 public function setDepth($depth){
  $this->depth = $depth;
 }
}
