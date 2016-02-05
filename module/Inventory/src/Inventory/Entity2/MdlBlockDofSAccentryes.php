<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAccentryes
 *
 * @ORM\Table(name="mdl_block_dof_s_accentryes", indexes={@ORM\Index(name="mdl_blocdofsacce_fro_ix", columns={"fromid"}), @ORM\Index(name="mdl_blocdofsacce_toi_ix", columns={"toid"}), @ORM\Index(name="mdl_blocdofsacce_amo_ix", columns={"amount"}), @ORM\Index(name="mdl_blocdofsacce_ord_ix", columns={"orderid"}), @ORM\Index(name="mdl_blocdofsacce_cre_ix", columns={"createdate"}), @ORM\Index(name="mdl_blocdofsacce_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofsacce_ext_ix", columns={"extentryoptshash"}), @ORM\Index(name="mdl_blocdofsacce_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSAccentryes
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
     * @ORM\Column(name="fromid", type="bigint", nullable=false)
     */
    private $fromid;

    /**
     * @var integer
     *
     * @ORM\Column(name="toid", type="bigint", nullable=false)
     */
    private $toid;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=16, scale=4, nullable=false)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=false)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdate", type="integer", nullable=false)
     */
    private $createdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="extentryopts", type="text", nullable=true)
     */
    private $extentryopts;

    /**
     * @var string
     *
     * @ORM\Column(name="extentryoptshash", type="string", length=32, nullable=true)
     */
    private $extentryoptshash;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=false)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;


}
