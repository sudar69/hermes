<?php

namespace Inventory\Model;

use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;

class WidgetTable
{
    
    private $myObject = null;
    
    private $myEntity;
    
    private $id;
    
    private $page;
    
    private $em;
    
    private $name;

    function __construct($em, $id, $page, $name, $myObject, $myEntity) {
        $this->em = $em;
        $this->setId($id);
        $this->setPage($page);
        $this->setName($name);
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
    
    public function getPage(){
        return $this->page;
    }

    public function setPage($page){
        $this->page = $page;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function getWidget(){
         
                
    	/*$queryBuilder = $this->em->createQueryBuilder();
		$queryBuilder->select('t')
		             ->from($this->getMyEntity(), 't')
		             ->where('t.parentid = ?1')
		             ->setParameter(1, $this->getId());
		
		$results = $queryBuilder->getQuery()
		                        ->getResult();
		return $results;*/
		
		//paginator
		$repository = $this->em->getRepository($this->getMyEntity());
		$adapter = new DoctrineAdapter(new ORMPaginator($repository->createQueryBuilder('user')->where('user.parentid = '.$this->getId())));
		$paginator = new Paginator($adapter);
		$paginator->setDefaultItemCountPerPage(15);
		
		$page = (int)$this->getPage();
		if($page) $paginator->setCurrentPageNumber($page);
		
        return array('data' => $paginator, /*'page' => $page,*/ 'name' => $this->getName());
		
    }
}