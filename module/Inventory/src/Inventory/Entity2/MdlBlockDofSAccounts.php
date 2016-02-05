<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAccounts
 *
 * @ORM\Table(name="mdl_block_dof_s_accounts", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofsacco_md5_uix", columns={"md5code"})}, indexes={@ORM\Index(name="mdl_blocdofsacco_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofsacco_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofsacco_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsacco_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofsacco_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsacco_cre_ix", columns={"createdate"}), @ORM\Index(name="mdl_blocdofsacco_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsacco_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSAccounts
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
     * @ORM\Column(name="plugintype", type="string", length=20, nullable=false)
     */
    private $plugintype;

    /**
     * @var string
     *
     * @ORM\Column(name="plugincode", type="string", length=20, nullable=false)
     */
    private $plugincode;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectid", type="bigint", nullable=false)
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdate", type="integer", nullable=false)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="md5code", type="string", length=32, nullable=false)
     */
    private $md5code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;


}
