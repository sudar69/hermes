<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Inventory\Model\Dashboard;
use Inventory\Model\Row;
use Inventory\Model\Col;
use Inventory\Model\WidgetTable;
use Inventory\Model\WidgetView;
use Inventory\Model\Page;
use Inventory\Model\Url;

use Inventory\Entity\DekaAddresses;

class AddrController extends AbstractActionController
{
    
    private function confPage() {
    	$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
		
		//create Page
		$page = new Page($em, 1, new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		$url1 = new Url('Test1', 'index');
		$url2 = new Url('Test2', 'view');
		$page->setUrls(array($url1,$url2));
		/*
		//Page 1
		$widgetTable = new WidgetTable($em, 1, $this->params()->fromQuery('addr_page', 1), 'addr', new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		
		$col = new Col();
		$col->addWidget($widgetTable);
		
		$row = new Row();
		$row->addCol($col);
		
		$dashboard = new Dashboard();
		$dashboard->setId("1");
		$dashboard->setName("Адреса");
		$dashboard->setUrl("index");
		$dashboard->addRow($row);
		
		
		//Page2
		$request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
        }
        
		$widgetView = new WidgetView($em, $this->params()->fromRoute('id',1), 'addr_view', 'edit', new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		$widgetView->setPost($post);
		
		$col2 = new Col();
		$col2->addWidget($widgetView);
		
		$row2 = new Row();
		$row2->addCol($col2);
		
		$dashboard2 = new Dashboard();
		$dashboard2->setId("2");
		$dashboard2->setName("Параметры");
		$dashboard2->setUrl("view");
		$dashboard2->addRow($row2);
		
		$page->setDashboards(array('1' => $dashboard, '2' => $dashboard2));
		*/
		return $page;
    }
    
    public function indexAction()
	{
		/*$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
		
		$page = new Page($em, 1, new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		
		$widgetTable = new WidgetTable($em, 1, new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		
		$col = new Col();
		$col->addWidget($widgetTable);
		
		$row = new Row();
		$row->addCol($col);
		
		$dashboard = new Dashboard();
		$dashboard->setId("1");
		$dashboard->setName("1");
		$dashboard->setUrl("index");
		$dashboard->addRow($row);
		
		$page->setDashboards(array($dashboard, $dashboard));*/
		//$this->id = $this->params()->fromRoute('id');
		//$this->id = $this->params()->fromRoute('id');
		//var_dump($this->params()->fromQuery('test'));
		$page = $this->confPage();
		$page->setActivePage(0);
		
		$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
		//Page 1
		$widgetTable = new WidgetTable($em, 1, $this->params()->fromQuery('addr_page', 1), 'addr', new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		
		$col = new Col();
		$col->addWidget($widgetTable);
		
		$row = new Row();
		$row->addCol($col);
		
		$dashboard = new Dashboard();
		$dashboard->setId("1");
		$dashboard->setName("Адреса");
		$dashboard->setUrl("index");
		$dashboard->addRow($row);
		
		$page->setDashboard($dashboard);
		
		$view = new ViewModel(array(
            'dashboard' => $page,
        ));
        
        return $view;
	}
    
    public function viewAction()
	{
    	$page = $this->confPage();
		$page->setActivePage(1);
		
		$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
		//Page2
		$request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
        }
        
		$widgetView = new WidgetView($em, $this->params()->fromRoute('id',1), 'addr_view', $this->params()->fromQuery('addr_view_mode', 'view'), new DekaAddresses, 'Inventory\Entity\DekaAddresses');
		$widgetView->setPost($post);
		
		$col2 = new Col();
		$col2->addWidget($widgetView);
		
		$row2 = new Row();
		$row2->addCol($col2);
		
		$dashboard2 = new Dashboard();
		$dashboard2->setId("2");
		$dashboard2->setName("Параметры");
		$dashboard2->setUrl("view");
		$dashboard2->addRow($row2);
		
		$page->setDashboard($dashboard2);
		
		$view = new ViewModel(array(
            'dashboard' => $page,
        ));
        
        $view->setTemplate('inventory/addr/index');
        return $view;
	}
	
	public function editAction()
	{
		$page = $this->confPage();
		$page->setActiveDashboard($this->params()->fromQuery('ad_page', 1));
    	
		$view = new ViewModel(array(
            'dashboard' => $page,
        ));
        $view->setTemplate('inventory/addr/index');
        return $view;
	}
}