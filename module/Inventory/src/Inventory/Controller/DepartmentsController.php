<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Inventory\Entity\DekaDepartments;

class DepartmentsController extends BasicActions
{
    
    public function __construct() {
    	$this->setMyObject(new DekaDepartments);
    	$this->setMyEntity('Inventory\Entity\DekaDepartments');
    	$this->setMyName("Data.name");
    	$this->setMyIndex(array( 'Id' => 'id',
    	                        'Название' => 'name',
    	                        'Описание' => 'description',
    	                        ));
    }
    
}