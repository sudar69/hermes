<?php

namespace Inventory\Model;

class WidgetView
{
    
    private $myObject = null;
    
    private $myEntity;
    
    private $id;
    
    private $em;
    
    private $name;
    
    private $mode;
    
    private $post;

    function __construct($em, $id, $name, $mode, $myObject, $myEntity) {
        $this->em = $em;
        $this->setId($id);
        $this->setName($name);
        $this->setMode($mode);
        $this->setMyObject($myObject);
        $this->setMyEntity($myEntity);
    }

    public function getMyObject(){
        return $this->myObject;
    }

    public function setMyObject($myObject){
        $this->myObject = $myObject;
    }

    public function getMyEntity(){
        return $this->myEntity;
    }

    public function setMyEntity($myEntity){
        $this->myEntity = $myEntity;
    }

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
    
    public function getMode(){
        return $this->mode;
    }

    public function setMode($mode){
        $this->mode = $mode;
    }
    
    public function getPost(){
        return $this->post;
    }

    public function setPost($post){
        $this->post = $post;
    }
    
    public function getWidget(){
         
        if ($this->getMode() !== null) {
            if ($this->getMode() == 'view') {
                $form = $this->getWidgetView()['form'];
                $redirect = $this->getWidgetView()['redirect'];
            } elseif ($this->getMode() == 'edit') {
                $form = $this->getWidgetEdit()['form'];
                $redirect = $this->getWidgetView()['redirect'];
            }
            
        } 
        
		return array(
            'form' => $form, 'mode' => $this->getMode(), 'name' => $this->getName(), 'redirect' => $redirect
        );
    }
    
    private function getWidgetView() {
        try {
			$repository = $this->em->getRepository($this->getMyEntity());
			$record = $repository->find($this->id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
			//return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        }
        $widgetForm = new WidgetForm();
		
		$form = $widgetForm->getForm($record, $this->em, $this->getMyEntity(), 'Update');
		$form->remove('send');
		$form->bind($record);
		return array('form' => $form, 'redirect' => $redirect);
    }
    
    private function getWidgetEdit() {
		/*$id = $this->params()->fromRoute('id');
		if (!$id) return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));*/

        try {
			$repository = $this->em->getRepository($this->getMyEntity());
			$record = $repository->find($this->id);
        }
        catch (\Exception $ex) {
			echo $ex->getMessage(); // this never will be seen fi you don't comment the redirect
			//return $this->redirect()->toRoute('inventory', array('controller' => 'inventory', 'action' => 'index'));
        }
        //$this->layout()->setVariable('exampleH1', $article->getName());
		$widgetForm = new WidgetForm();
		
		$form = $widgetForm->getForm($record, $this->em, $this->getMyEntity(), 'Сохранить');
		
		$form->bind($record);
		
        //$request = $this->getRequest();
        //if ($request->isPost()) {
        if ($this->getPost() !== null) {
			//$post = $request->getPost();
			$post = $this->getPost();
			// uncooment and fix if you want to control the date and time
//			$post->artcCreated = $post->artcCreatedDate . ' ' . $post->artcCreatedTime;
			$form->setData($post);
			 if ($form->isValid()) {
//				$this->prepareData($article);
				$this->em->persist($record);
				$this->em->flush();
                //return $this->redirect()->toRoute($this->getController(), array('controller' => $this->getController(), 'action' => 'index', 'id' => $this->id));
                $redirect = 'index';
			 }
		}

        return array('form' => $form, 'redirect' => $redirect);
    }

}