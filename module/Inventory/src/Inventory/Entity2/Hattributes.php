<?php

namespace Inventory\Entity2;

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


}
