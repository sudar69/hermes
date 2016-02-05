<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder as DoctrineAnnotationBuilder;
use Zend\Form\Form;

use Zend\Math\Rand;

use Inventory\Entity\Hdevices;
use Inventory\Entity\Hgroups;
use Inventory\Entity\DekaBasic;
use Inventory\Entity\DekaDepartments;

use Zend\Config\Writer\PhpArray;

use Zend\Form\Element;

use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;

class BasicActions extends AbstractActionController
{
    
    private $myObject = null;
    
    private $myEntity;
    
    private $myIndex;
    
    private $myName = 'Data.id';
    
    public function setMyObject($myObject) {
        $this->myObject = $myObject;
        return $this;
    }
    
    public function getMyObject() {
        return $this->myObject;
    }
    
    public function setMyEntity($myEntity) {
        $this->myEntity = $myEntity;
        return $this;
    }
    
    public function getMyEntity() {
        return $this->myEntity;
    }
    
    public function setMyIndex($myIndex) {
        $this->myIndex = $myIndex;
        return $this;
    }
    
    public function getMyIndex() {
        return $this->myIndex;
    }
    
    public function setMyName($myName) {
        $this->myName = $myName;
        return $this;
    }
    
    public function getMyName() {
        return $this->myName;
    }
    
    public function jsonAction()
    {
    	
    	$id = (int) $this->params()->fromRoute('id', 1);
        if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
    	
    	$em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
                
    	$queryBuilder = $em->createQueryBuilder();
		$queryBuilder->select('t')
		             ->from($this->getMyEntity(), 't')
		             ->where('t.parentid = ?1')
		             ->setParameter(1, $id);
		
		$results = $queryBuilder->getQuery()
		                        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
		return new JsonModel(array(
        			'data' => $results,
        		));
    }
    
    public function indexAction()
	{
        $this->layout()->setVariable('myBreadCrumb', $this->getBreadCrumb());
        
		$id = (int) $this->params()->fromRoute('id', 1);
        if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
	    
        try {
            $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
			$repository = $entityManager->getRepository($this->getMyEntity());
			$basic = $repository->find($id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
        }
        
		$view = new ViewModel(array(
            //'form' => $form,
            'id' => $id,
            'index' => $this->getMyIndex(),
            'myname' => $this->getMyName(),
            'pagename' => $basic->getName(),
            'pagebread' => $this->getBreadCrumb($id),
        ));
        $view->setTemplate('inventory/basic/index');
        return $view;
	}
    
    public function addAction()
    {
        $id = $this->params()->fromRoute('id');
		if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
		
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		//$myObject = new Hgroups;

		$form = $this->getForm($this->getMyObject(), $entityManager, 'Добавить');
		$form->bind($this->getMyObject());

        if($this->getRequest()->isXmlHttpRequest()) {
            $this->layout('inventory/layout/ajax-layout.phtml');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
			$form->setData($post);
			 if ($form->isValid()) {
			    //$this->getMyObject()->setOrderId(0);
			    //$this->getMyObject()->setRemotePort(0);
			    
			    $this->getMyObject()->setParentid($entityManager->getReference($this->getMyEntity(), $id));
			    
				$entityManager->persist($this->getMyObject());
				$entityManager->flush();
                //return $this->redirect()->toRoute('inventory', array('action' => 'index'));
			 }
		}
        $view = new ViewModel(array(
            'form' => $form,
        ));
        $view->setTemplate('inventory/basic/add');
        return $view;
    }
    
    public function viewAction()
	{
		$id = $this->params()->fromRoute('id');
		if (!$id) return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));

		$entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		
        try {
			$repository = $entityManager->getRepository($this->getMyEntity());
			$article = $repository->find($id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
			return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        }
        
        $this->layout()->setVariable('exampleH1', $article->getName());
		
		$form = $this->getForm($article, $entityManager, 'Update');
		$form->remove('send');
		$form->bind($article);
		
		$view = new ViewModel(array(
            'form' => $form, 
            'id' => $id,
            'pagename' => $article->getName(),
            'pagebread' => $this->getBreadCrumb($id),
        ));
        $view->setTemplate('inventory/basic/view');
        return $view;
	}
	
	public function editAction()
	{
		$id = $this->params()->fromRoute('id');
		if (!$id) return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));

		$entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		
        try {
			$repository = $entityManager->getRepository($this->getMyEntity());
			$article = $repository->find($id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
			return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        }
        $this->layout()->setVariable('exampleH1', $article->getName());
		
		$form = $this->getForm($article, $entityManager, 'Сохранить');
		
		$form->bind($article);
		
        $request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
			// uncooment and fix if you want to control the date and time
//			$post->artcCreated = $post->artcCreatedDate . ' ' . $post->artcCreatedTime;
			$form->setData($post);
			 if ($form->isValid()) {
//				$this->prepareData($article);
				$entityManager->persist($article);
				$entityManager->flush();
                return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));				
			 }
		}
		$view = new ViewModel(array(
            'form' => $form, 'id' => $id
        ));
        $view->setTemplate('inventory/basic/edit');
        return $view;
	}
	
	public function ajaxtableAction()
    {
        $id = $this->params()->fromRoute('id', 1);
        if (!$id) return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        
        $repository = $entityManager->getRepository($this->getMyEntity());
		$adapter = new DoctrineAdapter(new ORMPaginator($repository->createQueryBuilder('user')->where('user.parentid = '.$id)));
		$paginator = new Paginator($adapter);
		$paginator->setDefaultItemCountPerPage(15);
		
		//$page = (int)$this->params()->fromRoute('id', 1);
		$page = (int)$this->params()->fromQuery('page', 1);
		if($page) $paginator->setCurrentPageNumber($page);
		
		$viewmodel = new ViewModel();
		$viewmodel->setTemplate('inventory/basic/ajaxtable');
        //disable layout if request by Ajax
        $request = $this->getRequest();
        $viewmodel->setTerminal($request->isXmlHttpRequest());
        $is_xmlhttprequest = 1;
        if ( ! $request->isXmlHttpRequest()) $is_xmlhttprequest = 0;
		$viewmodel->setVariables(array(
                    'data' => $paginator,
                    'page' => $page,
                    'id' => $id,
                    'is_xmlhttprequest' => $is_xmlhttprequest,
                    'w_id' => Rand::getString(32, 'abcdefghijklmnopqrstuvwxyz', true),
                    
        ));
        
        return $viewmodel;
        
    }
    
    public function ajaxaddAction()
    {
        $id = $this->params()->fromRoute('id');
		if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
		
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		//$myObject = new Hgroups;

		$form = $this->getForm($this->getMyObject(), $entityManager, 'Добавить');
		
		$hidden = new Element\Hidden('my-mode');
        $hidden->setValue('add');
        $form->add($hidden);
		
		$form->bind($this->getMyObject());

        $request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
			$form->setData($post);
			 if ($form->isValid()) {
			    //$this->getMyObject()->setOrderId(0);
			    //$this->getMyObject()->setRemotePort(0);
			    
			    $this->getMyObject()->setParentid($entityManager->getReference($this->getMyEntity(), $id));
			    
				$entityManager->persist($this->getMyObject());
				$entityManager->flush();
                return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
			 }
		}
		$viewmodel = new ViewModel();
		$viewmodel->setTerminal($request->isXmlHttpRequest());
        $is_xmlhttprequest = 1;
        if ( ! $request->isXmlHttpRequest()) $is_xmlhttprequest = 0;
		$viewmodel->setVariables(array(
                    'form' => $form,
                    'id' => $id,
                    'is_xmlhttprequest' => $is_xmlhttprequest
        ));

        $viewmodel->setTemplate('inventory/basic/ajaxadd');
        
        return $viewmodel;
    }
    
    public function validateajaxaddAction()
    {
        $id = $this->params()->fromRoute('id');
		if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
        $form = null;
        //$form    = $this->getForm();
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		if ($this->params()->fromPost('my-mode') == 'add') {
		    $form = $this->getForm($this->getMyObject(), $entityManager, 'Добавить');
		    $form->bind($this->getMyObject());
		}elseif($this->params()->fromPost('my-mode') == 'edit'){
		    try {
    			$repository = $entityManager->getRepository($this->getMyEntity());
    			$article = $repository->find($id);
            }
            catch (\Exception $ex) {
    			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
    			return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
            }
            $form = $this->getForm($article, $entityManager, 'Добавить');
            $form->bind($article);
		}
		
        $request = $this->getRequest();
        $response = $this->getResponse();
         
        $messages = array();
        if ($request->isPost()){
            $form->setData($request->getPost());
            if ( ! $form->isValid()) {
                $errors = $form->getMessages();
                foreach($errors as $key=>$row)
                {
                    if (!empty($row) && $key != 'submit') {
                        foreach($row as $keyer => $rower)
                        {
                            //save error(s) per-element that
                            //needed by Javascript
                            $messages[$key][] = $rower;    
                        }
                    }
                }
            }
             
            if (!empty($messages)){        
                $response->setContent(\Zend\Json\Json::encode($messages));
            } else {
                //save to db <span class="wp-smiley wp-emoji wp-emoji-wink" title=";)">;)</span>
                //$this->savetodb($form->getData());
                if ($this->params()->fromPost('my-mode') == 'add') {
                    $this->getMyObject()->setParentid($entityManager->getReference($this->getMyEntity(), $id));
                    $entityManager->persist($this->getMyObject());
                }elseif($this->params()->fromPost('my-mode') == 'edit'){
                    $entityManager->persist($article);
                }
				
				$entityManager->flush();
                $response->setContent(\Zend\Json\Json::encode(array('success'=>1)));
            }
        }
         
        return $response;
    }
    
    public function ajaxviewAction()
	{
		$id = $this->params()->fromRoute('id');
		if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }

		$entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		
        try {
			$repository = $entityManager->getRepository($this->getMyEntity());
			$article = $repository->find($id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
			return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        }
        

		$form = $this->getForm($article, $entityManager, 'Update');
		$form->remove('send');
		$form->bind($article);
		
		$viewmodel = new ViewModel();
		$request = $this->getRequest();
		$viewmodel->setTerminal($request->isXmlHttpRequest());
        $is_xmlhttprequest = 1;
        if ( ! $request->isXmlHttpRequest()) $is_xmlhttprequest = 0;
		$viewmodel->setVariables(array(
                    'form' => $form,
                    'id' => $id,
                    'is_xmlhttprequest' => $is_xmlhttprequest,
                    'mode' => 'view',
        ));

        $viewmodel->setTemplate('inventory/basic/ajaxview');
        
        return $viewmodel;
	}
	
	public function ajaxeditAction()
	{
        $id = $this->params()->fromRoute('id');
		if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }

		$entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		
        try {
			$repository = $entityManager->getRepository($this->getMyEntity());
			$article = $repository->find($id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
			return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        }
        $this->layout()->setVariable('exampleH1', $article->getName());
		
		$form = $this->getForm($article, $entityManager, 'Сохранить');
		
		$hidden = new Element\Hidden('my-mode');
        $hidden->setValue('edit');
        $form->add($hidden);
		
		$form->bind($article);
		
        $request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
			// uncooment and fix if you want to control the date and time
//			$post->artcCreated = $post->artcCreatedDate . ' ' . $post->artcCreatedTime;
			$form->setData($post);
			 if ($form->isValid()) {
//				$this->prepareData($article);
				$entityManager->persist($article);
				$entityManager->flush();
                //return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));				
			 }
		}
		$viewmodel = new ViewModel();
		$request = $this->getRequest();
		$viewmodel->setTerminal($request->isXmlHttpRequest());
        $is_xmlhttprequest = 1;
        if ( ! $request->isXmlHttpRequest()) $is_xmlhttprequest = 0;
		$viewmodel->setVariables(array(
                    'form' => $form,
                    'id' => $id,
                    'is_xmlhttprequest' => $is_xmlhttprequest,
                    'mode' => 'edit',
        ));

        $viewmodel->setTemplate('inventory/basic/ajaxview');
        
        return $viewmodel;
        
	}
	
	public function getBreadCrumb($id = null) {
	    if ($id == null) {
	        $id = $this->params()->fromRoute('id', 1);
	    }
	    
        try {
            $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
			$repository = $entityManager->getRepository($this->getMyEntity());
			$basic = $repository->find($id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
        }
        
        $myController = $this->getEvent()->getRouteMatch()->getMatchedRouteName();
        $data = '<li><a href="'.$this->url()->fromRoute($myController, array('controller' => $myController, 'action' => 'index', 'id' => $id)).'">'.$basic->getName().'</a></li>'.$data;
        
        $myParent = $basic->getParentid();
        if ($myParent !== null) {
             $data = $this->getBreadCrumb($myParent->getId()).$data;
        }

        return $data;
	}
    
    public function getForm($article, $entityManager, $action)
	{
		$builder = new DoctrineAnnotationBuilder($entityManager);
		$form = $builder->createForm($article);
		
		//!!!!!! Start !!!!! Added to make the association tables work with select
		foreach ($form->getElements() as $element){
			if(method_exists($element, 'getProxy')){                
				$proxy = $element->getProxy();
				if(method_exists($proxy, 'setObjectManager')){  
					$proxy->setObjectManager($entityManager);
				}
			}           
		}
		

		$form->setHydrator(new DoctrineHydrator($entityManager, $this->getMyEntity()));

		$oName = new Element('name');
		$oName->setAttributes(array(
			'type'  => 'text',
			'maxlength'  => 255,
		));
		$oName->setOptions(array(
			'label'  => 'Название',
			
		));
		$form->add($oName, array(
            'priority' => 1000, // Increase value to move to top of form
        ));
        
        $oDescription = new Element('description');
		$oDescription->setAttributes(array(
			'type'  => 'text',
			'maxlength'  => 255,
		));
		$oDescription->setOptions(array(
			'label'  => 'Описание',
			
		));
		$form->add($oDescription, array(
            'priority' => 999, // Increase value to move to top of form
        ));

		$send = new Element('send');
		$send->setValue($action); // submit
		$send->setAttributes(array(
			'type'  => 'submit'
		));
		$form->add($send);

        foreach ($form->getElements() as $element){
			$element->setAttribute('id', $element->getName());
			$element->setAttribute('class', 'form-control');
		    /*if ($element->getLabel() === null) {
		        $element->setOptions(array('add-on-div' => array('class'  => 'col-sm-offset-2 col-sm-10'), ));
		    } else {
		        $element->setOptions(array( 'add-on-div' => array('class'  => 'col-sm-10'), 
		                                'label_attributes' => array('class'  => 'col-sm-2 control-label'),
		                          ));
		    }*/
		}

        /*
		foreach ($form->getElements() as $element){
		    if ($element->getLabel() === null) {
		        $element->setOptions(array('add-on-div' => array('class'  => 'col-sm-offset-2 col-sm-10'), ));
		    } else {
		        $element->setOptions(array( 'add-on-div' => array('class'  => 'col-sm-10'), 
		                                'label_attributes' => array('class'  => 'col-sm-2 control-label'),
		                          ));
		    }
		}*/

		return $form;
	}
    
}