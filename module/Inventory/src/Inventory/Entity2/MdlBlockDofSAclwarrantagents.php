<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAclwarrantagents
 *
 * @ORM\Table(name="mdl_block_dof_s_aclwarrantagents", indexes={@ORM\Index(name="mdl_blocdofsaclw_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsaclw_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofsaclw_bas_ix", columns={"basetype"}), @ORM\Index(name="mdl_blocdofsaclw_bas2_ix", columns={"baseid"}), @ORM\Index(name="mdl_blocdofsaclw_acl_ix", columns={"aclwarrantid"}), @ORM\Index(name="mdl_blocdofsaclw_dat_ix", columns={"datecreate"}), @ORM\Index(name="mdl_blocdofsaclw_beg_ix", columns={"begindate"}), @ORM\Index(name="mdl_blocdofsaclw_dur_ix", columns={"duration"}), @ORM\Index(name="mdl_blocdofsaclw_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsaclw_bas3_ix", columns={"baseptype"}), @ORM\Index(name="mdl_blocdofsaclw_bas4_ix", columns={"basepcode"}), @ORM\Index(name="mdl_blocdofsaclw_isd_ix", columns={"isdelegatable"})})
 * @ORM\Entity
 */
class MdlBlockDofSAclwarrantagents
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
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;

    /**
     * @var string
     *
     * @ORM\Column(name="baseptype", type="string", length=20, nullable=true)
     */
    private $baseptype;

    /**
     * @var string
     *
     * @ORM\Column(name="basepcode", type="string", length=20, nullable=true)
     */
    private $basepcode;

    /**
     * @var string
     *
     * @ORM\Column(name="basetype", type="string", length=20, nullable=true)
     */
    private $basetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="baseid", type="bigint", nullable=false)
     */
    private $baseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="aclwarrantid", type="bigint", nullable=false)
     */
    private $aclwarrantid;

    /**
     * @var integer
     *
     * @ORM\Column(name="datecreate", type="bigint", nullable=false)
     */
    private $datecreate;

    /**
     * @var integer
     *
     * @ORM\Column(name="begindate", type="bigint", nullable=false)
     */
    private $begindate;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="bigint", nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isdelegatable", type="boolean", nullable=false)
     */
    private $isdelegatable;


}
