<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSWorkplaces
 *
 * @ORM\Table(name="mdl_block_dof_s_workplaces", indexes={@ORM\Index(name="mdl_blocdofswork_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofswork_org_ix", columns={"organizationid"}), @ORM\Index(name="mdl_blocdofswork_sta_ix", columns={"statuswork"}), @ORM\Index(name="mdl_blocdofswork_pos_ix", columns={"post"}), @ORM\Index(name="mdl_blocdofswork_rec_ix", columns={"receptiondate"}), @ORM\Index(name="mdl_blocdofswork_dis_ix", columns={"dismissaldate"})})
 * @ORM\Entity
 */
class MdlBlockDofSWorkplaces
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
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;

    /**
     * @var integer
     *
     * @ORM\Column(name="organizationid", type="bigint", nullable=true)
     */
    private $organizationid;

    /**
     * @var string
     *
     * @ORM\Column(name="statuswork", type="string", length=50, nullable=true)
     */
    private $statuswork;

    /**
     * @var string
     *
     * @ORM\Column(name="post", type="string", length=255, nullable=true)
     */
    private $post;

    /**
     * @var integer
     *
     * @ORM\Column(name="receptiondate", type="bigint", nullable=true)
     */
    private $receptiondate;

    /**
     * @var integer
     *
     * @ORM\Column(name="dismissaldate", type="bigint", nullable=true)
     */
    private $dismissaldate;

    /**
     * @var string
     *
     * @ORM\Column(name="phonework", type="string", length=10, nullable=true)
     */
    private $phonework;

    /**
     * @var string
     *
     * @ORM\Column(name="addnumber", type="string", length=5, nullable=true)
     */
    private $addnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


}
