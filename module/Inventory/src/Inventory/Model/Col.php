<?php

namespace Inventory\Model;

class Col
{
    
    private $col;
    
    private $classsize;
    
    private $widgets = array();
    
    public function getCol(){
        return $this->col;
    }

    public function setCol($col){
        $this->col = $col;
    }

    public function getClasssize(){
        return $this->classsize;
    }

    public function setClasssize($classsize){
        $this->classsize = $classsize;
    }

    public function getWidgets(){
        return $this->widgets;
    }

    public function setWidgets($widgets){
        $this->widgets = $widgets;
    }
    
     public function addWidget($widget){
         $this->widgets[] = $widget;
     }
    
}