<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSPlaninh
 *
 * @ORM\Table(name="mdl_block_dof_s_planinh", indexes={@ORM\Index(name="mdl_blocdofsplan_pla_ix", columns={"planid"}), @ORM\Index(name="mdl_blocdofsplan_inh_ix", columns={"inhplanid"})})
 * @ORM\Entity
 */
class MdlBlockDofSPlaninh
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
     * @ORM\Column(name="planid", type="bigint", nullable=false)
     */
    private $planid;

    /**
     * @var integer
     *
     * @ORM\Column(name="inhplanid", type="bigint", nullable=false)
     */
    private $inhplanid;


}
