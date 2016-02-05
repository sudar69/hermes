<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSTags
 *
 * @ORM\Table(name="mdl_block_dof_s_tags", indexes={@ORM\Index(name="mdl_blocdofstags_cla_ix", columns={"class"}), @ORM\Index(name="mdl_blocdofstags_par_ix", columns={"parentid"}), @ORM\Index(name="mdl_blocdofstags_own_ix", columns={"ownerid"}), @ORM\Index(name="mdl_blocdofstags_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofstags_cro_ix", columns={"cron"}), @ORM\Index(name="mdl_blocdofstags_cro2_ix", columns={"crondone"}), @ORM\Index(name="mdl_blocdofstags_cro3_ix", columns={"cronstatus"}), @ORM\Index(name="mdl_blocdofstags_cro4_ix", columns={"cronrepeate"}), @ORM\Index(name="mdl_blocdofstags_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofstags_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSTags
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
     * @ORM\Column(name="class", type="string", length=255, nullable=false)
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="bigint", nullable=false)
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerid", type="bigint", nullable=false)
     */
    private $ownerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=false)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="text", nullable=true)
     */
    private $options;

    /**
     * @var integer
     *
     * @ORM\Column(name="cron", type="bigint", nullable=false)
     */
    private $cron;

    /**
     * @var integer
     *
     * @ORM\Column(name="crondone", type="bigint", nullable=true)
     */
    private $crondone;

    /**
     * @var string
     *
     * @ORM\Column(name="cronstatus", type="string", length=255, nullable=true)
     */
    private $cronstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="cronrepeate", type="bigint", nullable=false)
     */
    private $cronrepeate;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=false)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;


}
