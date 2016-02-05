<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSCstreams
 *
 * @ORM\Table(name="mdl_block_dof_s_cstreams", indexes={@ORM\Index(name="mdl_blocdofscstr_age_ix", columns={"ageid"}), @ORM\Index(name="mdl_blocdofscstr_pro_ix", columns={"programmitemid"}), @ORM\Index(name="mdl_blocdofscstr_tea_ix", columns={"teacherid"}), @ORM\Index(name="mdl_blocdofscstr_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofscstr_mdl_ix", columns={"mdlgroup"}), @ORM\Index(name="mdl_blocdofscstr_beg_ix", columns={"begindate"}), @ORM\Index(name="mdl_blocdofscstr_end_ix", columns={"enddate"}), @ORM\Index(name="mdl_blocdofscstr_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofscstr_app_ix", columns={"appointmentid"}), @ORM\Index(name="mdl_blocdofscstr_las_ix", columns={"lastgradesync"}), @ORM\Index(name="mdl_blocdofscstr_hou_ix", columns={"hoursweekinternally"}), @ORM\Index(name="mdl_blocdofscstr_sal_ix", columns={"salfactor"}), @ORM\Index(name="mdl_blocdofscstr_sub_ix", columns={"substsalfactor"})})
 * @ORM\Entity
 */
class MdlBlockDofSCstreams
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
     * @ORM\Column(name="ageid", type="bigint", nullable=true)
     */
    private $ageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmitemid", type="bigint", nullable=true)
     */
    private $programmitemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacherid", type="bigint", nullable=true)
     */
    private $teacherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="appointmentid", type="bigint", nullable=true)
     */
    private $appointmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="mdlgroup", type="bigint", nullable=true)
     */
    private $mdlgroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="eduweeks", type="smallint", nullable=true)
     */
    private $eduweeks;

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
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="hours", type="bigint", nullable=true)
     */
    private $hours;

    /**
     * @var integer
     *
     * @ORM\Column(name="hoursweek", type="bigint", nullable=true)
     */
    private $hoursweek;

    /**
     * @var string
     *
     * @ORM\Column(name="hoursweekinternally", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $hoursweekinternally;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="hoursweekdistance", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $hoursweekdistance;

    /**
     * @var string
     *
     * @ORM\Column(name="explanatory", type="text", nullable=true)
     */
    private $explanatory;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastgradesync", type="bigint", nullable=true)
     */
    private $lastgradesync;

    /**
     * @var float
     *
     * @ORM\Column(name="salfactor", type="float", precision=6, scale=2, nullable=false)
     */
    private $salfactor;

    /**
     * @var float
     *
     * @ORM\Column(name="substsalfactor", type="float", precision=6, scale=2, nullable=false)
     */
    private $substsalfactor;


}
