<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAgroups
 *
 * @ORM\Table(name="mdl_block_dof_s_agroups", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofsagro_cod_uix", columns={"code"})}, indexes={@ORM\Index(name="mdl_blocdofsagro_pro_ix", columns={"programmid"}), @ORM\Index(name="mdl_blocdofsagro_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsagro_age3_ix", columns={"agenum"}), @ORM\Index(name="mdl_blocdofsagro_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsagro_sal_ix", columns={"salfactor"})})
 * @ORM\Entity
 */
class MdlBlockDofSAgroups
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="programmid", type="bigint", nullable=true)
     */
    private $programmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agenum", type="boolean", nullable=false)
     */
    private $agenum;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="metacontractid", type="bigint", nullable=true)
     */
    private $metacontractid;

    /**
     * @var float
     *
     * @ORM\Column(name="salfactor", type="float", precision=6, scale=2, nullable=false)
     */
    private $salfactor;


}
