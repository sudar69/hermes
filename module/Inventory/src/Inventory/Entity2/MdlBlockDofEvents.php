<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofEvents
 *
 * @ORM\Table(name="mdl_block_dof_events", indexes={@ORM\Index(name="mdl_blocdofeven_pluplueve_ix", columns={"plugintype", "plugincode", "eventcode"})})
 * @ORM\Entity
 */
class MdlBlockDofEvents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="plugintype", type="string", length=20, nullable=false)
     */
    private $plugintype;

    /**
     * @var string
     *
     * @ORM\Column(name="plugincode", type="string", length=20, nullable=false)
     */
    private $plugincode;

    /**
     * @var string
     *
     * @ORM\Column(name="eventcode", type="string", length=50, nullable=false)
     */
    private $eventcode;

    /**
     * @var string
     *
     * @ORM\Column(name="rplugintype", type="string", length=10, nullable=false)
     */
    private $rplugintype;

    /**
     * @var string
     *
     * @ORM\Column(name="rplugincode", type="string", length=20, nullable=false)
     */
    private $rplugincode;


}
