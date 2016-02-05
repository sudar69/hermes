<?php

namespace Inventory\Model;

class Page
{
    private $name;
    
    private $id;
    
    private $em;
    
    private $myObject = null;
    
    private $myEntity;
    
    private $urls;
    
    private $dashboard;
    
    private $activePage;

    function __construct($em, $id, $myObject, $myEntity) {
        $this->em = $em;
        $this->setId($id);
        $this->setMyObject($myObject);
        $this->setMyEntity($myEntity);
        $data = $em->getRepository($myEntity)->findBy(array('id' => $id))[0]->getName();
        $this->setName($data);
    }

 public function getName(){
  return $this->name;
 }

 public function setName($name){
  $this->name = $name;
 }

 public function getId(){
  return $this->id;
 }

 public function setId($id){
  $this->id = $id;
 }

 public function getEm(){
  return $this->em;
 }

 public function setEm($em){
  $this->em = $em;
 }

 public function getMyObject(){
  return $this->myObject;
 }

 public function setMyObject($myObject){
  $this->myObject = $myObject;
 }

 public function getMyEntity(){
  return $this->myEntity;
 }

 public function setMyEntity($myEntity){
  $this->myEntity = $myEntity;
 }

 public function getUrls(){
  return $this->urls;
 }

 public function setUrls($urls){
  $this->urls = $urls;
 }

 public function getDashboard(){
  return $this->dashboard;
 }

 public function setDashboard($dashboard){
  $this->dashboard = $dashboard;
 }

 public function getActivePage(){
  if ($this->activePage == null) {
   return 1;
  } else {
   return $this->activePage;
  }
 }

 public function setActivePage($activePage){
  $this->activePage = $activePage;
 }

}