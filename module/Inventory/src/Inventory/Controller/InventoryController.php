<?php

namespace Inventory\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder as DoctrineAnnotationBuilder;
use Zend\Form\Form;

use Inventory\Entity\Hdevices;
use Inventory\Entity\Hgroups;

use Zend\Form\Element;
use DluTwBootstrap\Form\Horizontal;

class InventoryController extends AbstractActionController
{
    
    public function indexAction()
    {
        $id = (int) $this->params()->fromRoute('id', 1);
        if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        $em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
                

        $data = $em->getRepository('Inventory\Entity\Hgroups')->findBy(array('groupId' => $id));

        return new ViewModel(array(
        			'datas' => $data,
        		));
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
		             ->from('Inventory\Entity\Hgroups', 't')
		             ->where('t.groupId = ?1')
		             ->setParameter(1, $id);
		
		$results = $queryBuilder->getQuery()
		                        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);

		return new JsonModel(array(
        			'data' => $results,
        		));
    }
    
    public function parametersAction()
    {
        $id = (int) $this->params()->fromRoute('id', 1);
        if (!$id) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        $em = $this->getServiceLocator()
                ->get('doctrine.entitymanager.orm_default');
                
        $query = $em->createQueryBuilder()->select('p')
        ->from('Inventory\Entity\Hobjects', 'o')
        ->innerJoin('Inventory\Entity\Hattrtypes', 'at', 'WITH', 'o.type = at.type')
        ->innerJoin('Inventory\Entity\Hattributes', 'a', 'WITH', 'a.id = at.attr')
        ->leftJoin('Inventory\Entity\Hparams', 'p', 'WITH', 'o.id = p.object and a.id = p.attr')
        ->Where('o.id = :object_id')
        ->setParameter('object_id', $id)
        ->getQuery();
        $data = $query->getResult();
        
        
        //$params = $em->getRepository('Inventory\Entity\Hparams')->findAll(array('object' => $id, 'id' => '1'));
        
        $builder = new DoctrineAnnotationBuilder( $em);
        foreach ($data as $key=>$d_) {
            $form[$key] = $builder->createForm( $data[$key] );
            $form[$key]->setHydrator(new DoctrineHydrator($em,'Inventory\Entity\Hparams'));
            $form[$key]->bind($data[$key]);
            //$v_ = $form[$key]->setOptions();
            //var_dump($v_);
        }
        
        return new ViewModel(array(
        			'datas' => $data,
        			'form'=>$form
        		));
    }
    
    public function parameterstAction()
    {

		$entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		$article = new Hdevices;
		$builder = new DoctrineAnnotationBuilder($entityManager);
		$form = $builder->createForm( $article );
		/*foreach ($form->getElements() as $element){
			if(method_exists($element, 'getProxy')){                
				$proxy = $element->getProxy();
				if(method_exists($proxy, 'setObjectManager')){  
					$proxy->setObjectManager($entityManager);
				}
			}           
		}*/
		$form->setHydrator(new DoctrineHydrator($entityManager,'Inventory\Entity\Hdevices'));
		
		
		
		$send = new Element('send');
		$send->setValue('Add'); // submit
		$send->setAttributes(array(
			'type'  => 'submit'
		));
		$form->add($send);

		$form->bind($article);
		
		foreach ($form->getElements() as $element){
		    if ($element->getLabel() === null) {
		        $element->setOptions(array('add-on-div' => array('class'  => 'col-sm-offset-2 col-sm-10'), ));
		    } else {
		        $element->setOptions(array( 'add-on-div' => array('class'  => 'col-sm-10'), 
		                                'label_attributes' => array('class'  => 'col-sm-2 control-label'),
		                          ));
		    }
		    
		}

        if($this->getRequest()->isXmlHttpRequest()) {
            $this->layout('inventory/layout/ajax-layout.phtml');
        }
        
		return new ViewModel(array('form' => $form));
		
		
		
    }
    
    public function addAction()
    {
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		$myObject = new Hgroups;
		/*$builder = new DoctrineAnnotationBuilder($entityManager);
		$form = $builder->createForm( $myObject );
		//!!!!!! Start !!!!! Added to make the association tables work with select
		foreach ($form->getElements() as $element){
			if(method_exists($element, 'getProxy')){                
				$proxy = $element->getProxy();
				if(method_exists($proxy, 'setObjectManager')){  
					$proxy->setObjectManager($entityManager);
				}
			}           
		}
		$form->setHydrator(new DoctrineHydrator($entityManager,'Inventory\Entity\Hgroups'));
		
		$send = new Element('send');
		$send->setValue('Добавить'); // submit
		$send->setAttributes(array(
			'type'  => 'submit'
		));
		$form->add($send);*/
		
		//$myObject->setGroupid($entityManager->getRepository('Inventory\Entity\Hgroups')->findOneBy(array('id' => $this->getRequest()->getPost()->get('groupId'))));
		$form = $this->getForm($myObject, $entityManager, 'Добавить');
		
		$form->bind($myObject);
		
		
		
		foreach ($form->getElements() as $element){
		    if ($element->getLabel() === null) {
		        $element->setOptions(array('add-on-div' => array('class'  => 'col-sm-offset-2 col-sm-10'), ));
		    } else {
		        $element->setOptions(array( 'add-on-div' => array('class'  => 'col-sm-10'), 
		                                'label_attributes' => array('class'  => 'col-sm-2 control-label'),
		                          ));
		    }
		    
		}

        if($this->getRequest()->isXmlHttpRequest()) {
            $this->layout('inventory/layout/ajax-layout.phtml');
        }
        
        $request = $this->getRequest();
        if ($request->isPost()) {
			$post = $request->getPost();
			//var_dump($entityManager->getReference('Inventory\Entity\Hgroups', $post->get('groupId')));
			$form->setData($post);
			 if ($form->isValid()) {
			    $myObject->setOrderId(0);
			    $myObject->setRemotePort(0);
			    
				$entityManager->persist($myObject);
				$entityManager->flush();
                //return $this->redirect()->toRoute('inventory', array('action' => 'index'));
			 }
		}
        
		return new ViewModel(array('form' => $form));
    }
    
    public function getForm($article, $entityManager, $action)
	{
		$builder = new DoctrineAnnotationBuilder($entityManager);
		$form = $builder->createForm( $article );
		
		//!!!!!! Start !!!!! Added to make the association tables work with select
		foreach ($form->getElements() as $element){
			if(method_exists($element, 'getProxy')){                
				$proxy = $element->getProxy();
				if(method_exists($proxy, 'setObjectManager')){  
					$proxy->setObjectManager($entityManager);
				}
			}           
		}

		//$form->remove('artcCreated');
		//$form->remove('groupId');
		//$form->remove('author');
		$form->setHydrator(new DoctrineHydrator($entityManager,'Inventory\Entity\Hgroups'));
		$send = new Element('send');
		$send->setValue($action); // submit
		$send->setAttributes(array(
			'type'  => 'submit'
		));
		$form->add($send);

		return $form;		
	}
}
