<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSProgramms
 *
 * @ORM\Table(name="mdl_block_dof_s_programms", indexes={@ORM\Index(name="mdl_blocdofsprog_nam2_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsprog_cod2_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsprog_sta2_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsprog_dep2_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsprog_aho_ix", columns={"ahours"})})
 * @ORM\Entity
 */
class MdlBlockDofSProgramms
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="string", length=255, nullable=true)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="string", length=255, nullable=true)
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="agenums", type="smallint", nullable=true)
     */
    private $agenums;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="bigint", nullable=true)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="ahours", type="bigint", nullable=true)
     */
    private $ahours;

    /**
     * @var string
     *
     * @ORM\Column(name="billingtext", type="text", nullable=true)
     */
    private $billingtext;

    /**
     * @var string
     *
     * @ORM\Column(name="billingrules", type="text", nullable=true)
     */
    private $billingrules;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flowagenums", type="boolean", nullable=true)
     */
    private $flowagenums;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edulevel", type="boolean", nullable=true)
     */
    private $edulevel;


}
