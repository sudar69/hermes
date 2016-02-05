<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity
 */
class Languages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lng_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lngId;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_name", type="string", length=50, nullable=false)
     */
    private $lngName;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_abbreviation", type="string", length=10, nullable=true)
     */
    private $lngAbbreviation;


}
