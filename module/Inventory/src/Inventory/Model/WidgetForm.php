<?php

namespace Inventory\Model;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder as DoctrineAnnotationBuilder;

use Zend\Form\Element;

class WidgetForm
{

    public function getForm($article, $entityManager, $myEntity, $action)
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
		

		$form->setHydrator(new DoctrineHydrator($entityManager, $myEntity));

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

		return $form;
	}
	
}