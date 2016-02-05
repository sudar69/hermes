<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSTasks
 *
 * @ORM\Table(name="mdl_block_dof_s_tasks", indexes={@ORM\Index(name="mdl_blocdofstask_par_ix", columns={"parentid"}), @ORM\Index(name="mdl_blocdofstask_ass_ix", columns={"assignedpersonid"}), @ORM\Index(name="mdl_blocdofstask_pur_ix", columns={"purchaserpersonid"}), @ORM\Index(name="mdl_blocdofstask_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofstask_act_ix", columns={"actualdate"}), @ORM\Index(name="mdl_blocdofstask_dea_ix", columns={"deadlinedate"})})
 * @ORM\Entity
 */
class MdlBlockDofSTasks
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
     * @ORM\Column(name="parentid", type="bigint", nullable=false)
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="assignedpersonid", type="bigint", nullable=false)
     */
    private $assignedpersonid;

    /**
     * @var integer
     *
     * @ORM\Column(name="purchaserpersonid", type="bigint", nullable=false)
     */
    private $purchaserpersonid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=false)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="text", nullable=false)
     */
    private $solution;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="actualdate", type="bigint", nullable=true)
     */
    private $actualdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="deadlinedate", type="bigint", nullable=true)
     */
    private $deadlinedate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
