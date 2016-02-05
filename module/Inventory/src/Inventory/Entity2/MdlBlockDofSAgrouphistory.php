<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAgrouphistory
 *
 * @ORM\Table(name="mdl_block_dof_s_agrouphistory", indexes={@ORM\Index(name="mdl_blocdofsagro_agr_ix", columns={"agroupid"}), @ORM\Index(name="mdl_blocdofsagro_age_ix", columns={"ageid"}), @ORM\Index(name="mdl_blocdofsagro_age2_ix", columns={"agenum"}), @ORM\Index(name="mdl_blocdofsagro_cha_ix", columns={"changedate"}), @ORM\Index(name="mdl_blocdofsagro_ord_ix", columns={"orderid"})})
 * @ORM\Entity
 */
class MdlBlockDofSAgrouphistory
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
     * @ORM\Column(name="agroupid", type="bigint", nullable=false)
     */
    private $agroupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ageid", type="bigint", nullable=false)
     */
    private $ageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agenum", type="bigint", nullable=false)
     */
    private $agenum;

    /**
     * @var integer
     *
     * @ORM\Column(name="changedate", type="bigint", nullable=false)
     */
    private $changedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=true)
     */
    private $orderid;


}
