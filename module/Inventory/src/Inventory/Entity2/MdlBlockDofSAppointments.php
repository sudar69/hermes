<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAppointments
 *
 * @ORM\Table(name="mdl_block_dof_s_appointments", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofsappo_enu_uix", columns={"enumber"})}, indexes={@ORM\Index(name="mdl_blocdofsappo_eag_ix", columns={"eagreementid"}), @ORM\Index(name="mdl_blocdofsappo_sch_ix", columns={"schpositionid"}), @ORM\Index(name="mdl_blocdofsappo_wor_ix", columns={"worktime"}), @ORM\Index(name="mdl_blocdofsappo_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofsappo_beg_ix", columns={"begindate"}), @ORM\Index(name="mdl_blocdofsappo_end_ix", columns={"enddate"}), @ORM\Index(name="mdl_blocdofsappo_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsappo_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsappo_com_ix", columns={"combination"})})
 * @ORM\Entity
 */
class MdlBlockDofSAppointments
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
     * @ORM\Column(name="eagreementid", type="bigint", nullable=true)
     */
    private $eagreementid;

    /**
     * @var integer
     *
     * @ORM\Column(name="schpositionid", type="bigint", nullable=true)
     */
    private $schpositionid;

    /**
     * @var string
     *
     * @ORM\Column(name="enumber", type="string", length=30, nullable=false)
     */
    private $enumber;

    /**
     * @var string
     *
     * @ORM\Column(name="worktime", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $worktime;

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
     * @var boolean
     *
     * @ORM\Column(name="combination", type="boolean", nullable=true)
     */
    private $combination;


}
