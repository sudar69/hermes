<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSEducations
 *
 * @ORM\Table(name="mdl_block_dof_s_educations", indexes={@ORM\Index(name="mdl_blocdofseduc_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofseduc_org_ix", columns={"organizationid"}), @ORM\Index(name="mdl_blocdofseduc_edu_ix", columns={"edudocdate"})})
 * @ORM\Entity
 */
class MdlBlockDofSEducations
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
     * @ORM\Column(name="personid", type="bigint", nullable=false)
     */
    private $personid;

    /**
     * @var integer
     *
     * @ORM\Column(name="organizationid", type="bigint", nullable=true)
     */
    private $organizationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="edulevel", type="bigint", nullable=true)
     */
    private $edulevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="edydoctype", type="bigint", nullable=true)
     */
    private $edydoctype;

    /**
     * @var string
     *
     * @ORM\Column(name="edudoccode", type="string", length=255, nullable=true)
     */
    private $edudoccode;

    /**
     * @var string
     *
     * @ORM\Column(name="edudocserial", type="string", length=255, nullable=true)
     */
    private $edudocserial;

    /**
     * @var string
     *
     * @ORM\Column(name="edudocnum", type="string", length=255, nullable=true)
     */
    private $edudocnum;

    /**
     * @var string
     *
     * @ORM\Column(name="edudocdate", type="string", length=255, nullable=true)
     */
    private $edudocdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="startdate", type="bigint", nullable=true)
     */
    private $startdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="finishdate", type="bigint", nullable=true)
     */
    private $finishdate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


}
