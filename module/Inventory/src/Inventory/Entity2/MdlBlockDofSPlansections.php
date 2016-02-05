<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSPlansections
 *
 * @ORM\Table(name="mdl_block_dof_s_plansections", indexes={@ORM\Index(name="mdl_blocdofsplan_lin3_ix", columns={"linkid"}), @ORM\Index(name="mdl_blocdofsplan_lin4_ix", columns={"linktype"}), @ORM\Index(name="mdl_blocdofsplan_nam2_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsplan_sta2_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSPlansections
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
     * @ORM\Column(name="linkid", type="bigint", nullable=true)
     */
    private $linkid;

    /**
     * @var string
     *
     * @ORM\Column(name="linktype", type="string", length=20, nullable=true)
     */
    private $linktype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;


}
