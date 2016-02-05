<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSLearningplan
 *
 * @ORM\Table(name="mdl_block_dof_s_learningplan", indexes={@ORM\Index(name="mdl_blocdofslear_pro2_ix", columns={"programmsbcid"}), @ORM\Index(name="mdl_blocdofslear_agr_ix", columns={"agroupid"}), @ORM\Index(name="mdl_blocdofslear_age3_ix", columns={"agenum"}), @ORM\Index(name="mdl_blocdofslear_pro3_ix", columns={"programmitemid"}), @ORM\Index(name="mdl_blocdofslear_app_ix", columns={"appointmentid"})})
 * @ORM\Entity
 */
class MdlBlockDofSLearningplan
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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmsbcid", type="bigint", nullable=true)
     */
    private $programmsbcid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agroupid", type="bigint", nullable=true)
     */
    private $agroupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agenum", type="smallint", nullable=false)
     */
    private $agenum;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmitemid", type="bigint", nullable=false)
     */
    private $programmitemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="appointmentid", type="bigint", nullable=true)
     */
    private $appointmentid;


}
