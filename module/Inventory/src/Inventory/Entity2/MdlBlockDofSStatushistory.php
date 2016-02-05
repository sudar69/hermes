<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSStatushistory
 *
 * @ORM\Table(name="mdl_block_dof_s_statushistory", indexes={@ORM\Index(name="mdl_blocdofsstat_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofsstat_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofsstat_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofsstat_sta_ix", columns={"statusdate"}), @ORM\Index(name="mdl_blocdofsstat_ord_ix", columns={"orderid"})})
 * @ORM\Entity
 */
class MdlBlockDofSStatushistory
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
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="prevstatus", type="string", length=20, nullable=true)
     */
    private $prevstatus;

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
     * @var integer
     *
     * @ORM\Column(name="muserid", type="bigint", nullable=true)
     */
    private $muserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectid", type="bigint", nullable=true)
     */
    private $objectid;

    /**
     * @var integer
     *
     * @ORM\Column(name="statusdate", type="bigint", nullable=true)
     */
    private $statusdate;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="opt", type="text", nullable=true)
     */
    private $opt;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=true)
     */
    private $orderid;


}
