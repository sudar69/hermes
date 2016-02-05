<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSCpassed
 *
 * @ORM\Table(name="mdl_block_dof_s_cpassed", indexes={@ORM\Index(name="mdl_blocdofscpas_cst_ix", columns={"cstreamid"}), @ORM\Index(name="mdl_blocdofscpas_pro_ix", columns={"programmsbcid"}), @ORM\Index(name="mdl_blocdofscpas_pro2_ix", columns={"programmitemid"}), @ORM\Index(name="mdl_blocdofscpas_stu_ix", columns={"studentid"}), @ORM\Index(name="mdl_blocdofscpas_gra_ix", columns={"grade"}), @ORM\Index(name="mdl_blocdofscpas_gra2_ix", columns={"gradelevel"}), @ORM\Index(name="mdl_blocdofscpas_rep_ix", columns={"repeatid"}), @ORM\Index(name="mdl_blocdofscpas_typ_ix", columns={"typesync"}), @ORM\Index(name="mdl_blocdofscpas_mdl_ix", columns={"mdlinstance"}), @ORM\Index(name="mdl_blocdofscpas_tea_ix", columns={"teacherid"}), @ORM\Index(name="mdl_blocdofscpas_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofscpas_age_ix", columns={"ageid"}), @ORM\Index(name="mdl_blocdofscpas_ord_ix", columns={"orderid"}), @ORM\Index(name="mdl_blocdofscpas_agr_ix", columns={"agroupid"}), @ORM\Index(name="mdl_blocdofscpas_lea_ix", columns={"learninghistoryid"})})
 * @ORM\Entity
 */
class MdlBlockDofSCpassed
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
     * @var integer
     *
     * @ORM\Column(name="programmsbcid", type="bigint", nullable=true)
     */
    private $programmsbcid;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmitemid", type="bigint", nullable=true)
     */
    private $programmitemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="studentid", type="bigint", nullable=true)
     */
    private $studentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agroupid", type="bigint", nullable=true)
     */
    private $agroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=20, nullable=true)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="gradelevel", type="string", length=20, nullable=true)
     */
    private $gradelevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer", nullable=true)
     */
    private $credit;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="string", length=255, nullable=true)
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeatid", type="bigint", nullable=true)
     */
    private $repeatid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typesync", type="boolean", nullable=true)
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
     * @ORM\Column(name="teacherid", type="bigint", nullable=true)
     */
    private $teacherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ageid", type="bigint", nullable=true)
     */
    private $ageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=true)
     */
    private $orderid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="begindate", type="bigint", nullable=true)
     */
    private $begindate;

    /**
     * @var integer
     *
     * @ORM\Column(name="enddate", type="bigint", nullable=true)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sbcorderid", type="bigint", nullable=true)
     */
    private $sbcorderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="learninghistoryid", type="bigint", nullable=true)
     */
    private $learninghistoryid;


}
