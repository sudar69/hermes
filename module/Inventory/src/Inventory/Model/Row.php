<?php

namespace Inventory\Model;

class Row
{
    
    private $name;
    
    private $cols = array();
    
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getCols(){
        return $this->cols;
    }

    public function setCols($cols){
        $this->cols = $cols;
    }

    public function addCol(Col $col){
        $this->cols[] = $col;
        $size = count($this->cols);
        foreach ($this->cols as $element){
            $element->setClasssize(12/$size);
        }
    }
}