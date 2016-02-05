<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSCov
 *
 * @ORM\Table(name="mdl_block_dof_s_cov", indexes={@ORM\Index(name="mdl_blocdofscov_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofscov_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofscov_sub_ix", columns={"substorage"}), @ORM\Index(name="mdl_blocdofscov_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofscov_cod_ix", columns={"code"})})
 * @ORM\Entity
 */
class MdlBlockDofSCov
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
     * @ORM\Column(name="substorage", type="string", length=40, nullable=true)
     */
    private $substorage;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectid", type="bigint", nullable=false)
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;


}
