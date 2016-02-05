<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSOrders
 *
 * @ORM\Table(name="mdl_block_dof_s_orders", indexes={@ORM\Index(name="mdl_blocdofsorde_pluplucod_ix", columns={"plugintype", "plugincode", "code"}), @ORM\Index(name="mdl_blocdofsorde_plu_ix", columns={"pluginversion"}), @ORM\Index(name="mdl_blocdofsorde_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsorde_own_ix", columns={"ownerid"}), @ORM\Index(name="mdl_blocdofsorde_sig_ix", columns={"signerid"}), @ORM\Index(name="mdl_blocdofsorde_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofsorde_sig2_ix", columns={"signdate"}), @ORM\Index(name="mdl_blocdofsorde_exd_ix", columns={"exdate"}), @ORM\Index(name="mdl_blocdofsorde_cro_ix", columns={"crondate"}), @ORM\Index(name="mdl_blocdofsorde_cha_ix", columns={"changedate"}), @ORM\Index(name="mdl_blocdofsorde_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSOrders
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
     * @ORM\Column(name="plugincode", type="string", length=40, nullable=false)
     */
    private $plugincode;

    /**
     * @var string
     *
     * @ORM\Column(name="pluginversion", type="string", length=10, nullable=false)
     */
    private $pluginversion;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=40, nullable=false)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerid", type="bigint", nullable=true)
     */
    private $ownerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="signerid", type="bigint", nullable=true)
     */
    private $signerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="signdate", type="bigint", nullable=true)
     */
    private $signdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="exdate", type="bigint", nullable=true)
     */
    private $exdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="crondate", type="bigint", nullable=true)
     */
    private $crondate;

    /**
     * @var integer
     *
     * @ORM\Column(name="changedate", type="bigint", nullable=true)
     */
    private $changedate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="sdata", type="text", nullable=true)
     */
    private $sdata;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="text", nullable=true)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;


}
