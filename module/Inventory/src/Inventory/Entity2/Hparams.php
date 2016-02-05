<?php

namespace Inventory\Entity2;

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
     * @var \Inventory\Entity2\Hobjects
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Hobjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     * })
     */
    private $object;

    /**
     * @var \Inventory\Entity2\Hattributes
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Hattributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attr_id", referencedColumnName="id")
     * })
     */
    private $attr;


}
