<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Huserbywhen
 *
 * @ORM\Table(name="huserbywhen")
 * @ORM\Entity
 */
class Huserbywhen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdwhen", type="datetime", nullable=true)
     */
    private $createdwhen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiedby", type="datetime", nullable=true)
     */
    private $modifiedby;


}
