<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSConfig
 *
 * @ORM\Table(name="mdl_block_dof_s_config", indexes={@ORM\Index(name="mdl_blocdofsconf_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsconf_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsconf_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsconf_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofsconf_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofsconf_noe_ix", columns={"noextend"}), @ORM\Index(name="mdl_blocdofsconf_per_ix", columns={"personid"})})
 * @ORM\Entity
 */
class MdlBlockDofSConfig
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
     * @ORM\Column(name="departmentid", type="bigint", nullable=false)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="plugintype", type="string", length=20, nullable=true)
     */
    private $plugintype;

    /**
     * @var string
     *
     * @ORM\Column(name="plugincode", type="string", length=20, nullable=false)
     */
    private $plugincode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="noextend", type="boolean", nullable=false)
     */
    private $noextend;

    /**
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;


}
