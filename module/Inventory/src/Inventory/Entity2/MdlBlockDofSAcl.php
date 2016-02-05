<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAcl
 *
 * @ORM\Table(name="mdl_block_dof_s_acl", indexes={@ORM\Index(name="mdl_blocdofsacl_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsacl_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofsacl_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofsacl_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofsacl_acl_ix", columns={"aclwarrantid"})})
 * @ORM\Entity
 */
class MdlBlockDofSAcl
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectid", type="bigint", nullable=false)
     */
    private $objectid;

    /**
     * @var integer
     *
     * @ORM\Column(name="aclwarrantid", type="bigint", nullable=false)
     */
    private $aclwarrantid;


}
