<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSEagreements
 *
 * @ORM\Table(name="mdl_block_dof_s_eagreements", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofseagr_num_uix", columns={"num"})}, indexes={@ORM\Index(name="mdl_blocdofseagr_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofseagr_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofseagr_beg_ix", columns={"begindate"}), @ORM\Index(name="mdl_blocdofseagr_end_ix", columns={"enddate"}), @ORM\Index(name="mdl_blocdofseagr_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofseagr_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofseagr_num_ix", columns={"numpass"}), @ORM\Index(name="mdl_blocdofseagr_add_ix", columns={"adddate"})})
 * @ORM\Entity
 */
class MdlBlockDofSEagreements
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
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=255, nullable=true)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="numpass", type="string", length=255, nullable=true)
     */
    private $numpass;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=true)
     */
    private $date;

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
     * @ORM\Column(name="notice", type="string", length=255, nullable=true)
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="adddate", type="bigint", nullable=true)
     */
    private $adddate;


}
