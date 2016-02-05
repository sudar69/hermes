<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resources
 *
 * @ORM\Table(name="resources")
 * @ORM\Entity
 */
class Resources
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rs_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rsId;

    /**
     * @var string
     *
     * @ORM\Column(name="rs_name", type="string", length=100, nullable=false)
     */
    private $rsName;


}
