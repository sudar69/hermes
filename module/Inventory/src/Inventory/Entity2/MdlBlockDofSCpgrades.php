<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSCpgrades
 *
 * @ORM\Table(name="mdl_block_dof_s_cpgrades", indexes={@ORM\Index(name="mdl_blocdofscpgr_cpa_ix", columns={"cpassedid"}), @ORM\Index(name="mdl_blocdofscpgr_pla_ix", columns={"planid"}), @ORM\Index(name="mdl_blocdofscpgr_gra_ix", columns={"grade"}), @ORM\Index(name="mdl_blocdofscpgr_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofscpgr_typ_ix", columns={"typesync"}), @ORM\Index(name="mdl_blocdofscpgr_mdl_ix", columns={"mdlinstance"}), @ORM\Index(name="mdl_blocdofscpgr_ord_ix", columns={"orderid"}), @ORM\Index(name="mdl_blocdofscpgr_tea_ix", columns={"teacherid"}), @ORM\Index(name="mdl_blocdofscpgr_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSCpgrades
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
     * @ORM\Column(name="cpassedid", type="bigint", nullable=true)
     */
    private $cpassedid;

    /**
     * @var integer
     *
     * @ORM\Column(name="planid", type="bigint", nullable=true)
     */
    private $planid;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=20, nullable=true)
     */
    private $grade;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text", nullable=true)
     */
    private $notice;

    /**
     * @var string
     *
     * @ORM\Column(name="typesync", type="string", length=20, nullable=true)
     */
    private $typesync;

    /**
     * @var integer
     *
     * @ORM\Column(name="mdlinstance", type="bigint", nullable=true)
     */
    private $mdlinstance;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=true)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacherid", type="bigint", nullable=true)
     */
    private $teacherid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
