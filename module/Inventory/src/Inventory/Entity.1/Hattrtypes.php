<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hattrtypes
 *
 * @ORM\Table(name="hattrtypes", indexes={@ORM\Index(name="attr_id", columns={"attr_id"}), @ORM\Index(name="type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class Hattrtypes
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
     * @var \Inventory\Entity\Hattributes
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\Hattributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attr_id", referencedColumnName="id")
     * })
     */
    private $attr;

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
     * Set attr
     *
     * @param \Inventory\Entity\Hattributes $attr
     * @return Hattrtypes
     */
    public function setAttr(\Inventory\Entity\Hattributes $attr = null)
    {
        $this->attr = $attr;

        return $this;
    }

    /**
     * Get attr
     *
     * @return \Inventory\Entity\Hattributes 
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Set type
     *
     * @param \Inventory\Entity\Htypes $type
     * @return Hattrtypes
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
