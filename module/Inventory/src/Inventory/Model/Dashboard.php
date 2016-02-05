<?php

namespace Inventory\Model;

class Dashboard
{
    
    private $id;
    
    private $name;
    
    private $url;
    
    private $rows = array();
    
 public function getId(){
  return $this->id;
 }

 public function setId($id){
  $this->id = $id;
 }

 public function getName(){
  return $this->name;
 }

 public function setName($name){
  $this->name = $name;
 }
 
 public function getUrl(){
  return $this->url;
 }

 public function setUrl($url){
  $this->url = $url;
 }

 public function getRows(){
  return $this->rows;
 }

 public function setRows($rows){
  $this->rows = $rows;
 }
 
 public function addRow(Row $row){
  $this->rows[] = $row;
 }
    
}