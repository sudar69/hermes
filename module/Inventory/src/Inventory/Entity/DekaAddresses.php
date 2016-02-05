<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * deka_addresses
 *
 * @ORM\Table(name="deka_addresses")
 * @ORM\Entity
 * @Annotation\Name("deka_addresses")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class DekaAddresses extends DekaBasic
{
    /**
     * @var \Inventory\Entity\DekaAddresses
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaAddresses")
     * @ORM\JoinColumn(name="parentid", referencedColumnName="id", nullable=true)
     * @Annotation\Exclude()
     */
    private $parentid;
 
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     * @Annotation\Exclude()
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=10, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":10}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Почтовый индекс"})
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     * @Annotation\Type("Zend\Form\Element\Select")
	 * @Annotation\Options({
	 * "label":"Страна",
	 * "value_options":{ "01":"Ukraine", "2": "Member"}})
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=6, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":6}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Регион"})
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="county", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Район"})
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Населенный пункт"})
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="streetname", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Название улицы"})
     */
    private $streetname;

    /**
     * @var string
     *
     * @ORM\Column(name="streettype", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Тип улицы"})
     */
    private $streettype;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Номер дома"})
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="gate", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Подъезд"})
     */
    private $gate;

    /**
     * @var string
     *
     * @ORM\Column(name="floor", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Этаж"})
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="apartment", type="string", length=255, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Квартира"})
     */
    private $apartment;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=7, nullable=true)
     * @Annotation\Exclude()
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=7, nullable=true)
     * @Annotation\Exclude()
     */
    private $longitude;

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

 public function getParentid(){
  return $this->parentid;
 }

 public function setParentid($parentid){
  $this->parentid = $parentid;
 }

 public function getType(){
  return $this->type;
 }

 public function setType($type){
  $this->type = $type;
 }

 public function getPostalcode(){
  return $this->postalcode;
 }

 public function setPostalcode($postalcode){
  $this->postalcode = $postalcode;
 }

 public function getCountry(){
  return $this->country;
 }

 public function setCountry($country){
  $this->country = $country;
 }

 public function getRegion(){
  return $this->region;
 }

 public function setRegion($region){
  $this->region = $region;
 }

 public function getCounty(){
  return $this->county;
 }

 public function setCounty($county){
  $this->county = $county;
 }

 public function getCity(){
  return $this->city;
 }

 public function setCity($city){
  $this->city = $city;
 }

 public function getStreetname(){
  return $this->streetname;
 }

 public function setStreetname($streetname){
  $this->streetname = $streetname;
 }

 public function getStreettype(){
  return $this->streettype;
 }

 public function setStreettype($streettype){
  $this->streettype = $streettype;
 }

 public function getNumber(){
  return $this->number;
 }

 public function setNumber($number){
  $this->number = $number;
 }

 public function getGate(){
  return $this->gate;
 }

 public function setGate($gate){
  $this->gate = $gate;
 }

 public function getFloor(){
  return $this->floor;
 }

 public function setFloor($floor){
  $this->floor = $floor;
 }

 public function getApartment(){
  return $this->apartment;
 }

 public function setApartment($apartment){
  $this->apartment = $apartment;
 }

 public function getLatitude(){
  return $this->latitude;
 }

 public function setLatitude($latitude){
  $this->latitude = $latitude;
 }

 public function getLongitude(){
  return $this->longitude;
 }

 public function setLongitude($longitude){
  $this->longitude = $longitude;
 }

 public function getStatus(){
  return $this->status;
 }

 public function setStatus($status){
  $this->status = $status;
 }

}
