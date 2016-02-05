<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSInvitems
 *
 * @ORM\Table(name="mdl_block_dof_s_invitems", indexes={@ORM\Index(name="mdl_blocdofsinvi_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsinvi_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsinvi_ser_ix", columns={"serialnum"}), @ORM\Index(name="mdl_blocdofsinvi_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsinvi_cou_ix", columns={"count"}), @ORM\Index(name="mdl_blocdofsinvi_ter_ix", columns={"termofuse"}), @ORM\Index(name="mdl_blocdofsinvi_dat_ix", columns={"dateentry"}), @ORM\Index(name="mdl_blocdofsinvi_dat2_ix", columns={"datewriteoff"}), @ORM\Index(name="mdl_blocdofsinvi_inv_ix", columns={"invcategoryid"}), @ORM\Index(name="mdl_blocdofsinvi_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsinvi_inv2_ix", columns={"invsetid"}), @ORM\Index(name="mdl_blocdofsinvi_set_ix", columns={"setorderid"}), @ORM\Index(name="mdl_blocdofsinvi_out_ix", columns={"outorderid"}), @ORM\Index(name="mdl_blocdofsinvi_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSInvitems
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=30, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="serialnum", type="string", length=55, nullable=true)
     */
    private $serialnum;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="bigint", nullable=false)
     */
    private $count;

    /**
     * @var integer
     *
     * @ORM\Column(name="termofuse", type="bigint", nullable=true)
     */
    private $termofuse;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateentry", type="bigint", nullable=true)
     */
    private $dateentry;

    /**
     * @var integer
     *
     * @ORM\Column(name="datewriteoff", type="bigint", nullable=true)
     */
    private $datewriteoff;

    /**
     * @var integer
     *
     * @ORM\Column(name="invcategoryid", type="bigint", nullable=true)
     */
    private $invcategoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=false)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="invsetid", type="bigint", nullable=true)
     */
    private $invsetid;

    /**
     * @var integer
     *
     * @ORM\Column(name="setorderid", type="bigint", nullable=true)
     */
    private $setorderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="outorderid", type="bigint", nullable=true)
     */
    private $outorderid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
