<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSProgrammitems
 *
 * @ORM\Table(name="mdl_block_dof_s_programmitems", indexes={@ORM\Index(name="mdl_blocdofsprog_pro_ix", columns={"programmid"}), @ORM\Index(name="mdl_blocdofsprog_age_ix", columns={"agenum"}), @ORM\Index(name="mdl_blocdofsprog_cou_ix", columns={"courseclsid"}), @ORM\Index(name="mdl_blocdofsprog_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsprog_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsprog_mdl_ix", columns={"mdlcourse"}), @ORM\Index(name="mdl_blocdofsprog_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsprog_req_ix", columns={"required"}), @ORM\Index(name="mdl_blocdofsprog_hou_ix", columns={"hours"}), @ORM\Index(name="mdl_blocdofsprog_hou2_ix", columns={"hourstheory"}), @ORM\Index(name="mdl_blocdofsprog_hou3_ix", columns={"hourspractice"}), @ORM\Index(name="mdl_blocdofsprog_edu_ix", columns={"eduweeks"}), @ORM\Index(name="mdl_blocdofsprog_ins_ix", columns={"instrlevelid"}), @ORM\Index(name="mdl_blocdofsprog_gra_ix", columns={"gradelevel"}), @ORM\Index(name="mdl_blocdofsprog_sna_ix", columns={"sname"}), @ORM\Index(name="mdl_blocdofsprog_sco_ix", columns={"scode"}), @ORM\Index(name="mdl_blocdofsprog_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsprog_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsprog_con_ix", columns={"controltypeid"}), @ORM\Index(name="mdl_blocdofsprog_gra2_ix", columns={"gradesyncenabled"}), @ORM\Index(name="mdl_blocdofsprog_inc_ix", columns={"incjournwithoutgrade"}), @ORM\Index(name="mdl_blocdofsprog_inc2_ix", columns={"incjournwithunsatisfgrade"}), @ORM\Index(name="mdl_blocdofsprog_met_ix", columns={"metaprogrammitemid"}), @ORM\Index(name="mdl_blocdofsprog_sal_ix", columns={"salfactor"})})
 * @ORM\Entity
 */
class MdlBlockDofSProgrammitems
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
     * @ORM\Column(name="programmid", type="bigint", nullable=true)
     */
    private $programmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agenum", type="bigint", nullable=true)
     */
    private $agenum;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseclsid", type="bigint", nullable=true)
     */
    private $courseclsid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="mdlcourse", type="bigint", nullable=true)
     */
    private $mdlcourse;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="required", type="string", length=10, nullable=true)
     */
    private $required;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxcredit", type="integer", nullable=true)
     */
    private $maxcredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxduration", type="bigint", nullable=true)
     */
    private $maxduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="hours", type="bigint", nullable=true)
     */
    private $hours;

    /**
     * @var integer
     *
     * @ORM\Column(name="hourstheory", type="bigint", nullable=true)
     */
    private $hourstheory;

    /**
     * @var integer
     *
     * @ORM\Column(name="hourspractice", type="bigint", nullable=true)
     */
    private $hourspractice;

    /**
     * @var integer
     *
     * @ORM\Column(name="eduweeks", type="smallint", nullable=true)
     */
    private $eduweeks;

    /**
     * @var integer
     *
     * @ORM\Column(name="instrlevelid", type="bigint", nullable=true)
     */
    private $instrlevelid;

    /**
     * @var string
     *
     * @ORM\Column(name="gradelevel", type="string", length=20, nullable=true)
     */
    private $gradelevel;

    /**
     * @var string
     *
     * @ORM\Column(name="scale", type="string", length=255, nullable=true)
     */
    private $scale;

    /**
     * @var string
     *
     * @ORM\Column(name="mingrade", type="string", length=255, nullable=true)
     */
    private $mingrade;

    /**
     * @var string
     *
     * @ORM\Column(name="sname", type="string", length=255, nullable=true)
     */
    private $sname;

    /**
     * @var string
     *
     * @ORM\Column(name="scode", type="string", length=255, nullable=true)
     */
    private $scode;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=true)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text", nullable=true)
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="controltypeid", type="bigint", nullable=true)
     */
    private $controltypeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="hoursweek", type="bigint", nullable=true)
     */
    private $hoursweek;

    /**
     * @var string
     *
     * @ORM\Column(name="explanatory", type="text", nullable=true)
     */
    private $explanatory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gradesyncenabled", type="boolean", nullable=true)
     */
    private $gradesyncenabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incjournwithoutgrade", type="boolean", nullable=true)
     */
    private $incjournwithoutgrade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="incjournwithunsatisfgrade", type="boolean", nullable=true)
     */
    private $incjournwithunsatisfgrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="altgradeitem", type="bigint", nullable=true)
     */
    private $altgradeitem;

    /**
     * @var string
     *
     * @ORM\Column(name="metasyncon", type="string", length=10, nullable=true)
     */
    private $metasyncon;

    /**
     * @var integer
     *
     * @ORM\Column(name="metaprogrammitemid", type="bigint", nullable=true)
     */
    private $metaprogrammitemid;

    /**
     * @var string
     *
     * @ORM\Column(name="billingtext", type="text", nullable=true)
     */
    private $billingtext;

    /**
     * @var string
     *
     * @ORM\Column(name="billingrules", type="text", nullable=true)
     */
    private $billingrules;

    /**
     * @var float
     *
     * @ORM\Column(name="salfactor", type="float", precision=6, scale=2, nullable=false)
     */
    private $salfactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="hourslab", type="bigint", nullable=true)
     */
    private $hourslab;

    /**
     * @var integer
     *
     * @ORM\Column(name="hoursind", type="bigint", nullable=true)
     */
    private $hoursind;

    /**
     * @var integer
     *
     * @ORM\Column(name="hourscontrol", type="bigint", nullable=true)
     */
    private $hourscontrol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autohours", type="boolean", nullable=false)
     */
    private $autohours;

    /**
     * @var integer
     *
     * @ORM\Column(name="hoursclassroom", type="bigint", nullable=true)
     */
    private $hoursclassroom;


}
