<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSynclogs
 *
 * @ORM\Table(name="mdl_block_dof_s_synclogs", indexes={@ORM\Index(name="mdl_blocdofssync_syn_ix", columns={"syncid"}), @ORM\Index(name="mdl_blocdofssync_exe_ix", columns={"executetime"}), @ORM\Index(name="mdl_blocdofssync_dir2_ix", columns={"direct"}), @ORM\Index(name="mdl_blocdofssync_ope_ix", columns={"operation"}), @ORM\Index(name="mdl_blocdofssync_pre_ix", columns={"prevoperation"}), @ORM\Index(name="mdl_blocdofssync_err_ix", columns={"error"})})
 * @ORM\Entity
 */
class MdlBlockDofSSynclogs
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
     * @var integer
     *
     * @ORM\Column(name="syncid", type="bigint", nullable=false)
     */
    private $syncid;

    /**
     * @var integer
     *
     * @ORM\Column(name="executetime", type="bigint", nullable=true)
     */
    private $executetime;

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=10, nullable=true)
     */
    private $operation;

    /**
     * @var string
     *
     * @ORM\Column(name="direct", type="string", length=8, nullable=true)
     */
    private $direct;

    /**
     * @var string
     *
     * @ORM\Column(name="prevoperation", type="string", length=10, nullable=true)
     */
    private $prevoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="error", type="string", length=1, nullable=true)
     */
    private $error;

    /**
     * @var string
     *
     * @ORM\Column(name="textlog", type="text", nullable=true)
     */
    private $textlog;

    /**
     * @var string
     *
     * @ORM\Column(name="optlog", type="text", nullable=true)
     */
    private $optlog;


}
