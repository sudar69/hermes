<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSContracts
 *
 * @ORM\Table(name="mdl_block_dof_s_contracts", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofscont_num_uix", columns={"num"})}, indexes={@ORM\Index(name="mdl_blocdofscont_typ_ix", columns={"typeid"}), @ORM\Index(name="mdl_blocdofscont_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofscont_sel_ix", columns={"sellerid"}), @ORM\Index(name="mdl_blocdofscont_cli_ix", columns={"clientid"}), @ORM\Index(name="mdl_blocdofscont_stu_ix", columns={"studentid"}), @ORM\Index(name="mdl_blocdofscont_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofscont_add_ix", columns={"adddate"}), @ORM\Index(name="mdl_blocdofscont_org_ix", columns={"organizationid"}), @ORM\Index(name="mdl_blocdofscont_cur_ix", columns={"curatorid"}), @ORM\Index(name="mdl_blocdofscont_end_ix", columns={"enddate"}), @ORM\Index(name="mdl_blocdofscont_met_ix", columns={"metacontractid"})})
 * @ORM\Entity
 */
class MdlBlockDofSContracts
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
     * @var boolean
     *
     * @ORM\Column(name="typeid", type="boolean", nullable=true)
     */
    private $typeid;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=20, nullable=false)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="numpass", type="string", length=20, nullable=true)
     */
    private $numpass;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="sellerid", type="bigint", nullable=true)
     */
    private $sellerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientid", type="bigint", nullable=true)
     */
    private $clientid;

    /**
     * @var integer
     *
     * @ORM\Column(name="studentid", type="bigint", nullable=true)
     */
    private $studentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="adddate", type="bigint", nullable=false)
     */
    private $adddate;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

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
     * @var string
     *
     * @ORM\Column(name="contractform", type="string", length=30, nullable=true)
     */
    private $contractform;

    /**
     * @var string
     *
     * @ORM\Column(name="organizationid", type="string", length=255, nullable=true)
     */
    private $organizationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="curatorid", type="bigint", nullable=true)
     */
    private $curatorid;

    /**
     * @var integer
     *
     * @ORM\Column(name="enddate", type="bigint", nullable=true)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="metacontractid", type="bigint", nullable=true)
     */
    private $metacontractid;


}
