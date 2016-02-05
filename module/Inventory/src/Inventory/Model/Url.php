<?php

namespace Inventory\Model;

class Url
{
    private $name;
    
    private $id;
    
    private $url;

    function __construct($name, $url) {
        $this->setName($name);
        $this->setUrl($url);
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

 public function getUrl(){
  return $this->url;
 }

 public function setUrl($url){
  $this->url = $url;
 }

}