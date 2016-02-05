<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

use Zend\Math\Rand;

use Inventory\Entity\DekaAddresses;

use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;

class DemoController extends BasicActions
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
    
    public function indexAction()
    {
        return array();
    }
    
    public function test1Action()
    {
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        
        $repository = $entityManager->getRepository($this->getMyEntity());
		$adapter = new DoctrineAdapter(new ORMPaginator($repository->createQueryBuilder('user')->where('user.parentid = 1')));
		$paginator = new Paginator($adapter);
		$paginator->setDefaultItemCountPerPage(15);
		
		$page = (int)$this->params()->fromRoute('id', 1);
		if($page) $paginator->setCurrentPageNumber($page);
		
		$viewmodel = new ViewModel();
        //disable layout if request by Ajax
        $request = $this->getRequest();
        $viewmodel->setTerminal($request->isXmlHttpRequest());
        $is_xmlhttprequest = 1;
        if ( ! $request->isXmlHttpRequest()) $is_xmlhttprequest = 0;
		$viewmodel->setVariables(array(
                    'data' => $paginator,
                    'page' => $id,
                    'is_xmlhttprequest' => $is_xmlhttprequest,
                    'w_id' => Rand::getString(32, 'abcdefghijklmnopqrstuvwxyz', true),
                    
        ));
        
        return $viewmodel;
        
    }
    
    public function testAction()
    {
        $id = $this->params()->fromRoute('id', 1);
		if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
		
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		//$myObject = new Hgroups;

		$form = $this->getForm($this->getMyObject(), $entityManager, 'Добавить');
		$form->bind($this->getMyObject());
		
		$request = $this->getRequest();
        
        $viewmodel = new ViewModel();
        //disable layout if request by Ajax
        $viewmodel->setTerminal($request->isXmlHttpRequest());
        
        
        $is_xmlhttprequest = 1;
        if ( ! $request->isXmlHttpRequest()){
            //if NOT using Ajax
            $is_xmlhttprequest = 0;
            if ($request->isPost()){
                $form->setData($request->getPost());
                if ($form->isValid()){
                    //save to db <span class="wp-smiley wp-emoji wp-emoji-wink" title=";)">;)</span>
                    $this->getMyObject()->setParentid($entityManager->getReference($this->getMyEntity(), $id));
    				$entityManager->persist($this->getMyObject());
    				$entityManager->flush();
                }
            }
        }
        
        $viewmodel->setVariables(array(
                    'form' => $form,
                    // is_xmlhttprequest is needed for check this form is in modal dialog or not
                    // in view
                    'is_xmlhttprequest' => $is_xmlhttprequest
        ));
        
        return $viewmodel;
        
        
    }
    
}