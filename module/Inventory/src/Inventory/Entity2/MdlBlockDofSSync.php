<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSync
 *
 * @ORM\Table(name="mdl_block_dof_s_sync", indexes={@ORM\Index(name="mdl_blocdofssync_dow_ix", columns={"downptype"}), @ORM\Index(name="mdl_blocdofssync_dow2_ix", columns={"downpcode"}), @ORM\Index(name="mdl_blocdofssync_dow3_ix", columns={"downsubstorage"}), @ORM\Index(name="mdl_blocdofssync_dow4_ix", columns={"downid"}), @ORM\Index(name="mdl_blocdofssync_upp_ix", columns={"upptype"}), @ORM\Index(name="mdl_blocdofssync_upp2_ix", columns={"uppcode"}), @ORM\Index(name="mdl_blocdofssync_ups_ix", columns={"upsubstorage"}), @ORM\Index(name="mdl_blocdofssync_upi_ix", columns={"upid"}), @ORM\Index(name="mdl_blocdofssync_dir_ix", columns={"direct"}), @ORM\Index(name="mdl_blocdofssync_las_ix", columns={"lasttime"}), @ORM\Index(name="mdl_blocdofssync_las2_ix", columns={"lastoperation"})})
 * @ORM\Entity
 */
class MdlBlockDofSSync
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
     * @ORM\Column(name="downptype", type="string", length=40, nullable=false)
     */
    private $downptype;

    /**
     * @var string
     *
     * @ORM\Column(name="downpcode", type="string", length=40, nullable=true)
     */
    private $downpcode;

    /**
     * @var string
     *
     * @ORM\Column(name="downsubstorage", type="string", length=40, nullable=true)
     */
    private $downsubstorage;

    /**
     * @var string
     *
     * @ORM\Column(name="downid", type="string", length=40, nullable=true)
     */
    private $downid;

    /**
     * @var string
     *
     * @ORM\Column(name="upptype", type="string", length=40, nullable=true)
     */
    private $upptype;

    /**
     * @var string
     *
     * @ORM\Column(name="uppcode", type="string", length=40, nullable=true)
     */
    private $uppcode;

    /**
     * @var string
     *
     * @ORM\Column(name="upsubstorage", type="string", length=40, nullable=true)
     */
    private $upsubstorage;

    /**
     * @var string
     *
     * @ORM\Column(name="upid", type="string", length=40, nullable=true)
     */
    private $upid;

    /**
     * @var string
     *
     * @ORM\Column(name="direct", type="string", length=8, nullable=true)
     */
    private $direct;

    /**
     * @var integer
     *
     * @ORM\Column(name="lasttime", type="bigint", nullable=true)
     */
    private $lasttime;

    /**
     * @var string
     *
     * @ORM\Column(name="lastoperation", type="string", length=10, nullable=true)
     */
    private $lastoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="downhash", type="text", nullable=true)
     */
    private $downhash;

    /**
     * @var string
     *
     * @ORM\Column(name="uphash", type="text", nullable=true)
     */
    private $uphash;


}
