<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSchpositions
 *
 * @ORM\Table(name="mdl_block_dof_s_schpositions", indexes={@ORM\Index(name="mdl_blocdofsschp_pos_ix", columns={"positionid"}), @ORM\Index(name="mdl_blocdofsschp_wor_ix", columns={"worktime"}), @ORM\Index(name="mdl_blocdofsschp_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsschp_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSSchpositions
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
     * @ORM\Column(name="positionid", type="bigint", nullable=true)
     */
    private $positionid;

    /**
     * @var string
     *
     * @ORM\Column(name="worktime", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $worktime;

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


}
