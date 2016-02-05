<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hobjects
 *
 * @ORM\Table(name="hobjects", indexes={@ORM\Index(name="IDX_6DC044C5727ACA70", columns={"parent_id"}), @ORM\Index(name="type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class Hobjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var \Inventory\Entity\Hobjects
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\Hobjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \Inventory\Entity\Htypes
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\Htypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Hobjects
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return Hobjects
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set parent
     *
     * @param \Inventory\Entity\Hobjects $parent
     * @return Hobjects
     */
    public function setParent(\Inventory\Entity\Hobjects $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Inventory\Entity\Hobjects 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set type
     *
     * @param \Inventory\Entity\Htypes $type
     * @return Hobjects
     */
    public function setType(\Inventory\Entity\Htypes $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Inventory\Entity\Htypes 
     */
    public function getType()
    {
        return $this->type;
    }
}
