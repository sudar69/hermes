<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSOrderdata
 *
 * @ORM\Table(name="mdl_block_dof_s_orderdata", indexes={@ORM\Index(name="mdl_blocdofsorde_ord_ix", columns={"orderid"}), @ORM\Index(name="mdl_blocdofsorde_fir_ix", columns={"firstlvlname"}), @ORM\Index(name="mdl_blocdofsorde_var_ix", columns={"varnum"}), @ORM\Index(name="mdl_blocdofsorde_sca_ix", columns={"scalar"}), @ORM\Index(name="mdl_blocdofsorde_ind_ix", columns={"ind"})})
 * @ORM\Entity
 */
class MdlBlockDofSOrderdata
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
     * @ORM\Column(name="orderid", type="bigint", nullable=false)
     */
    private $orderid;

    /**
     * @var string
     *
     * @ORM\Column(name="firstlvlname", type="string", length=255, nullable=true)
     */
    private $firstlvlname;

    /**
     * @var integer
     *
     * @ORM\Column(name="varnum", type="bigint", nullable=false)
     */
    private $varnum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scalar", type="boolean", nullable=false)
     */
    private $scalar;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="ind", type="string", length=255, nullable=true)
     */
    private $ind;


}
