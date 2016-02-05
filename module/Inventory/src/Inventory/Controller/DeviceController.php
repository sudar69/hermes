<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Inventory\Entity\Hgroups;

class DeviceController extends BasicActions
{
    
    public function __construct() {
    	$this->setMyObject(new Hgroups);
    	$this->setMyEntity('Inventory\Entity\Hgroups');
    	$this->setMyIndex(array( 'Id' => 'id',
    	                        'Наименование' => 'dispname',
    	                        'Активность' => 'active',
    	                        'Тип подключения' => 'connecttype',
    	                        'Приоритет' => 'priority',
    	                        ));
    }
    
}