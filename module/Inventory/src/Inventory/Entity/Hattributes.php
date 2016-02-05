<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hattributes
 *
 * @ORM\Table(name="hattributes")
 * @ORM\Entity
 */
class Hattributes
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
     * @ORM\Column(name="attribute", type="string", length=100, nullable=false)
     */
    private $attribute;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=false)
     */
    private $notes;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;



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
     * Set attribute
     *
     * @param string $attribute
     * @return Hattributes
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return string 
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Hattributes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Hattributes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return Hattributes
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
}
