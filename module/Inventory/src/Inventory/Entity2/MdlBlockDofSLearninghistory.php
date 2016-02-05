<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSLearninghistory
 *
 * @ORM\Table(name="mdl_block_dof_s_learninghistory", indexes={@ORM\Index(name="mdl_blocdofslear_pro_ix", columns={"programmsbcid"}), @ORM\Index(name="mdl_blocdofslear_age_ix", columns={"ageid"}), @ORM\Index(name="mdl_blocdofslear_age2_ix", columns={"agenum"}), @ORM\Index(name="mdl_blocdofslear_cha_ix", columns={"changedate"}), @ORM\Index(name="mdl_blocdofslear_ord_ix", columns={"orderid"})})
 * @ORM\Entity
 */
class MdlBlockDofSLearninghistory
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
     * @ORM\Column(name="programmsbcid", type="bigint", nullable=false)
     */
    private $programmsbcid;

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
