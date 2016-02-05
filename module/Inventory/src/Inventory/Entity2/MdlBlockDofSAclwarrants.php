<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAclwarrants
 *
 * @ORM\Table(name="mdl_block_dof_s_aclwarrants", indexes={@ORM\Index(name="mdl_blocdofsaclw_lin_ix", columns={"linkid"}), @ORM\Index(name="mdl_blocdofsaclw_lin2_ix", columns={"linktype"}), @ORM\Index(name="mdl_blocdofsaclw_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsaclw_par_ix", columns={"parentid"}), @ORM\Index(name="mdl_blocdofsaclw_isd2_ix", columns={"isdelegatable"}), @ORM\Index(name="mdl_blocdofsaclw_sta2_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsaclw_lin3_ix", columns={"linkptype"}), @ORM\Index(name="mdl_blocdofsaclw_lin4_ix", columns={"linkpcode"}), @ORM\Index(name="mdl_blocdofsaclw_par2_ix", columns={"parenttype"}), @ORM\Index(name="mdl_blocdofsaclw_own_ix", columns={"ownerid"}), @ORM\Index(name="mdl_blocdofsaclw_dep2_ix", columns={"departmentid"})})
 * @ORM\Entity
 */
class MdlBlockDofSAclwarrants
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
     * @ORM\Column(name="linkptype", type="string", length=20, nullable=true)
     */
    private $linkptype;

    /**
     * @var string
     *
     * @ORM\Column(name="linkpcode", type="string", length=20, nullable=true)
     */
    private $linkpcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="linkid", type="bigint", nullable=false)
     */
    private $linkid;

    /**
     * @var string
     *
     * @ORM\Column(name="linktype", type="string", length=20, nullable=false)
     */
    private $linktype;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="bigint", nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="parenttype", type="string", length=20, nullable=false)
     */
    private $parenttype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isdelegatable", type="boolean", nullable=false)
     */
    private $isdelegatable;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerid", type="bigint", nullable=true)
     */
    private $ownerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;


}
