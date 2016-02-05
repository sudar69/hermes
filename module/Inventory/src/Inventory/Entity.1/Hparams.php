<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hparams
 *
 * @ORM\Table(name="hparams", indexes={@ORM\Index(name="object_id", columns={"object_id"}), @ORM\Index(name="attr_id", columns={"attr_id"})})
 * @ORM\Entity
 */
class Hparams
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
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var \Inventory\Entity\Hobjects
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\Hobjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     * })
     */
    private $object;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Hparams
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set object
     *
     * @param \Inventory\Entity\Hobjects $object
     * @return Hparams
     */
    public function setObject(\Inventory\Entity\Hobjects $object = null)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return \Inventory\Entity\Hobjects 
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set attr
     *
     * @param \Inventory\Entity\Hattributes $attr
     * @return Hparams
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
}
