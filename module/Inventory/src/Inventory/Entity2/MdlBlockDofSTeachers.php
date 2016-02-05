<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSTeachers
 *
 * @ORM\Table(name="mdl_block_dof_s_teachers", indexes={@ORM\Index(name="mdl_blocdofsteac_app_ix", columns={"appointmentid"}), @ORM\Index(name="mdl_blocdofsteac_pro_ix", columns={"programmitemid"}), @ORM\Index(name="mdl_blocdofsteac_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsteac_wor_ix", columns={"worktime"}), @ORM\Index(name="mdl_blocdofsteac_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSTeachers
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
     * @ORM\Column(name="appointmentid", type="bigint", nullable=true)
     */
    private $appointmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmitemid", type="bigint", nullable=true)
     */
    private $programmitemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="worktime", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $worktime;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
