<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSchtemplates
 *
 * @ORM\Table(name="mdl_block_dof_s_schtemplates", indexes={@ORM\Index(name="mdl_blocdofsscht_cst_ix", columns={"cstreamid"}), @ORM\Index(name="mdl_blocdofsscht_day_ix", columns={"daynum"}), @ORM\Index(name="mdl_blocdofsscht_day2_ix", columns={"dayvar"}), @ORM\Index(name="mdl_blocdofsscht_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsscht_beg_ix", columns={"begin"}), @ORM\Index(name="mdl_blocdofsscht_dur_ix", columns={"duration"}), @ORM\Index(name="mdl_blocdofsscht_for_ix", columns={"form"}), @ORM\Index(name="mdl_blocdofsscht_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsscht_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsscht_sal_ix", columns={"salfactor"})})
 * @ORM\Entity
 */
class MdlBlockDofSSchtemplates
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
     * @ORM\Column(name="cstreamid", type="bigint", nullable=true)
     */
    private $cstreamid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="daynum", type="boolean", nullable=true)
     */
    private $daynum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dayvar", type="boolean", nullable=true)
     */
    private $dayvar;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="begin", type="bigint", nullable=true)
     */
    private $begin;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="bigint", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="form", type="string", length=20, nullable=true)
     */
    private $form;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="salfactor", type="float", precision=6, scale=2, nullable=false)
     */
    private $salfactor;


}
