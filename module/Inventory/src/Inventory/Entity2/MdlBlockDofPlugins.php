<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofPlugins
 *
 * @ORM\Table(name="mdl_block_dof_plugins", indexes={@ORM\Index(name="mdl_blocdofplug_typcod_ix", columns={"type", "code"}), @ORM\Index(name="mdl_blocdofplug_las_ix", columns={"lastcron"}), @ORM\Index(name="mdl_blocdofplug_cro_ix", columns={"cron"})})
 * @ORM\Entity
 */
class MdlBlockDofPlugins
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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=20, nullable=false)
     */
    private $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="cron", type="bigint", nullable=true)
     */
    private $cron;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastcron", type="bigint", nullable=true)
     */
    private $lastcron;


}
