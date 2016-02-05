<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAges
 *
 * @ORM\Table(name="mdl_block_dof_s_ages", indexes={@ORM\Index(name="mdl_blocdofsages_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsages_beg_ix", columns={"begindate"}), @ORM\Index(name="mdl_blocdofsages_end_ix", columns={"enddate"}), @ORM\Index(name="mdl_blocdofsages_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsages_pre_ix", columns={"previousid"}), @ORM\Index(name="mdl_blocdofsages_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsages_sch_ix", columns={"schdays"}), @ORM\Index(name="mdl_blocdofsages_sch2_ix", columns={"schedudays"}), @ORM\Index(name="mdl_blocdofsages_sch3_ix", columns={"schstartdaynum"})})
 * @ORM\Entity
 */
class MdlBlockDofSAges
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
     * @ORM\Column(name="eduweeks", type="smallint", nullable=true)
     */
    private $eduweeks;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="previousid", type="bigint", nullable=true)
     */
    private $previousid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="schdays", type="integer", nullable=false)
     */
    private $schdays;

    /**
     * @var string
     *
     * @ORM\Column(name="schedudays", type="string", length=255, nullable=false)
     */
    private $schedudays;

    /**
     * @var integer
     *
     * @ORM\Column(name="schstartdaynum", type="integer", nullable=false)
     */
    private $schstartdaynum;


}
