<?php

namespace Inventory\Entity2;

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
     * @var \Inventory\Entity2\Hobjects
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Hobjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

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
