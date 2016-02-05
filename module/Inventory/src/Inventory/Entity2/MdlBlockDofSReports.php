<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSReports
 *
 * @ORM\Table(name="mdl_block_dof_s_reports", indexes={@ORM\Index(name="mdl_blocdofsrepo_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofsrepo_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofsrepo_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsrepo_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofsrepo_req_ix", columns={"requestdate"}), @ORM\Index(name="mdl_blocdofsrepo_com_ix", columns={"completedate"}), @ORM\Index(name="mdl_blocdofsrepo_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsrepo_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsrepo_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofsrepo_beg_ix", columns={"begindate"}), @ORM\Index(name="mdl_blocdofsrepo_end_ix", columns={"enddate"}), @ORM\Index(name="mdl_blocdofsrepo_cro_ix", columns={"crondate"})})
 * @ORM\Entity
 */
class MdlBlockDofSReports
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
     * @ORM\Column(name="plugincode", type="string", length=20, nullable=true)
     */
    private $plugincode;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;

    /**
     * @var integer
     *
     * @ORM\Column(name="requestdate", type="bigint", nullable=true)
     */
    private $requestdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="completedate", type="bigint", nullable=true)
     */
    private $completedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="crondate", type="bigint", nullable=true)
     */
    private $crondate;

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
     * @var integer
     *
     * @ORM\Column(name="objectid", type="bigint", nullable=true)
     */
    private $objectid;

    /**
     * @var integer
     *
     * @ORM\Column(name="begindate", type="bigint", nullable=true)
     */
    private $begindate;

    /**
     * @var integer
     *
     * @ORM\Column(name="enddate", type="bigint", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="requestdata", type="text", nullable=true)
     */
    private $requestdata;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=true)
     */
    private $filepath;


}
