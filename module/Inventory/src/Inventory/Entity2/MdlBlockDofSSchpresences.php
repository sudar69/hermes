<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSchpresences
 *
 * @ORM\Table(name="mdl_block_dof_s_schpresences", indexes={@ORM\Index(name="mdl_blocdofsschp_eve_ix", columns={"eventid"}), @ORM\Index(name="mdl_blocdofsschp_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofsschp_pre_ix", columns={"present"}), @ORM\Index(name="mdl_blocdofsschp_ord_ix", columns={"orderid"}), @ORM\Index(name="mdl_blocdofsschp_mdl_ix", columns={"mdlevent"})})
 * @ORM\Entity
 */
class MdlBlockDofSSchpresences
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
     * @ORM\Column(name="eventid", type="bigint", nullable=true)
     */
    private $eventid;

    /**
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;

    /**
     * @var string
     *
     * @ORM\Column(name="present", type="string", length=10, nullable=true)
     */
    private $present;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=true)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="mdlevent", type="bigint", nullable=true)
     */
    private $mdlevent;


}
