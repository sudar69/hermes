<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Inventory\Entity\DekaAddresses;

class AddressesController extends BasicActions
{
    
    public function __construct() {
    	$this->setMyObject(new DekaAddresses);
    	$this->setMyEntity('Inventory\Entity\DekaAddresses');
    	$this->setMyName("Data.country + '/' + Data.region");
    	$this->setMyIndex(array( 'Id' => 'id',
    	                        'Наименование' => 'country',
    	                        'Тип подключения' => 'region',
    	                        'Приоритет' => 'county',
    	                        ));
    }
    
}