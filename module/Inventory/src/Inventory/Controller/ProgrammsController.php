<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Inventory\Entity\DekaProgramms;

class ProgrammsController extends BasicActions
{
    
    public function __construct() {
    	$this->setMyObject(new DekaProgramms);
    	$this->setMyEntity('Inventory\Entity\DekaProgramms');
    	$this->setMyName("Data.name");
    	$this->setMyIndex(array( 'Id' => 'id',
    	                        'Название' => 'name',
    	                        'Описание' => 'description',
    	                        ));
    }
    
}