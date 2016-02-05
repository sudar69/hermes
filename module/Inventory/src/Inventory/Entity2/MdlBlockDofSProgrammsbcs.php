<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSProgrammsbcs
 *
 * @ORM\Table(name="mdl_block_dof_s_programmsbcs", indexes={@ORM\Index(name="mdl_blocdofsprog_con2_ix", columns={"contractid"}), @ORM\Index(name="mdl_blocdofsprog_pro2_ix", columns={"programmid"}), @ORM\Index(name="mdl_blocdofsprog_edu2_ix", columns={"edutype"}), @ORM\Index(name="mdl_blocdofsprog_edu3_ix", columns={"eduform"}), @ORM\Index(name="mdl_blocdofsprog_fre_ix", columns={"freeattendance"}), @ORM\Index(name="mdl_blocdofsprog_agr_ix", columns={"agroupid"}), @ORM\Index(name="mdl_blocdofsprog_age2_ix", columns={"agenum"}), @ORM\Index(name="mdl_blocdofsprog_dep3_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsprog_sta3_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsprog_dat_ix", columns={"datestart"}), @ORM\Index(name="mdl_blocdofsprog_dat2_ix", columns={"dateadd"}), @ORM\Index(name="mdl_blocdofsprog_cer_ix", columns={"certificatenum"}), @ORM\Index(name="mdl_blocdofsprog_cer2_ix", columns={"certificateform"}), @ORM\Index(name="mdl_blocdofsprog_cer3_ix", columns={"certificatedate"}), @ORM\Index(name="mdl_blocdofsprog_cer4_ix", columns={"certificateorderid"}), @ORM\Index(name="mdl_blocdofsprog_dat3_ix", columns={"dateend"}), @ORM\Index(name="mdl_blocdofsprog_sal2_ix", columns={"salfactor"})})
 * @ORM\Entity
 */
class MdlBlockDofSProgrammsbcs
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
     * @ORM\Column(name="contractid", type="bigint", nullable=true)
     */
    private $contractid;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmid", type="bigint", nullable=true)
     */
    private $programmid;

    /**
     * @var string
     *
     * @ORM\Column(name="edutype", type="string", length=20, nullable=true)
     */
    private $edutype;

    /**
     * @var string
     *
     * @ORM\Column(name="eduform", type="string", length=40, nullable=true)
     */
    private $eduform;

    /**
     * @var string
     *
     * @ORM\Column(name="freeattendance", type="string", length=10, nullable=true)
     */
    private $freeattendance;

    /**
     * @var integer
     *
     * @ORM\Column(name="agroupid", type="bigint", nullable=true)
     */
    private $agroupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agenum", type="smallint", nullable=true)
     */
    private $agenum;

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
     * @var integer
     *
     * @ORM\Column(name="datestart", type="bigint", nullable=true)
     */
    private $datestart;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateadd", type="bigint", nullable=true)
     */
    private $dateadd;

    /**
     * @var string
     *
     * @ORM\Column(name="certificatenum", type="string", length=255, nullable=true)
     */
    private $certificatenum;

    /**
     * @var string
     *
     * @ORM\Column(name="certificateform", type="string", length=30, nullable=true)
     */
    private $certificateform;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificatedate", type="bigint", nullable=true)
     */
    private $certificatedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificateorderid", type="bigint", nullable=true)
     */
    private $certificateorderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateend", type="bigint", nullable=true)
     */
    private $dateend;

    /**
     * @var float
     *
     * @ORM\Column(name="salfactor", type="float", precision=6, scale=0, nullable=false)
     */
    private $salfactor;


}
