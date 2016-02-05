<?php

namespace Inventory\Entity2;

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
     * @var \Inventory\Entity2\Hattributes
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Hattributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attr_id", referencedColumnName="id")
     * })
     */
    private $attr;

    /**
     * @var \Inventory\Entity2\Htypes
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Htypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;


}
