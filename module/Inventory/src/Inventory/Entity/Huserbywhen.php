<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Hgroups
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
class Huserbywhen
{
    /**
     * @var DateTime
     *
     * @ORM\Column(name="CREATEDWHEN", type="datetime", nullable=true)
     * @Annotation\Attributes({"type":"Zend\Form\Element\DateTime", "id": "CREATEDWHEN", "min":"2010-01-01T00:00:00Z", "max":"2020-01-01T00:00:00Z", "step":"1"})
     * @Annotation\Options({"label":"Date\Time:", "format":"Y-m-d\TH:iP"})	 
     */ 
    private $createdWhen;
    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="MODIFIEDBY", type="datetime", nullable=true)
     * @Annotation\Attributes({"type":"Zend\Form\Element\DateTime", "id": "MODIFIEDBY", "min":"2010-01-01T00:00:00Z", "max":"2020-01-01T00:00:00Z", "step":"1"})
     * @Annotation\Options({"label":"Date\Time:", "format":"Y-m-d\TH:iP"})	 
     */ 
    private $modifiedBy;
    
    public function __construct() {
		$this->createdWhen = new \DateTime();
		$this->modifiedBy = new \DateTime();
    }
    
    /**
     * Set createdWhen
     *
     * @param DateTime $createdWhen
     * @return Huserbywhen
     */
    public function setCreatedWhen($createdWhen)
    {
        $this->createdWhen = $createdWhen;
    
        return $this;
    }
    
    /**
     * Get createdWhen
     *
     * @return Array
     */
    public function getCreatedWhen()
    {
		return $this->createdWhen;
    }
    
    /**
     * Set modifiedBy
     *
     * @param DateTime $modifiedBy
     * @return Huserbywhen
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    
        return $this;
    }
    
    /**
     * Get modifiedBy
     *
     * @return Array
     */
    public function getModifiedBy()
    {
		return $this->modifiedBy;
    }
}