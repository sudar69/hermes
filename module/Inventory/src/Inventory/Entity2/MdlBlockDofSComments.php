<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSComments
 *
 * @ORM\Table(name="mdl_block_dof_s_comments", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofscomm_id_uix", columns={"id"})}, indexes={@ORM\Index(name="mdl_blocdofscomm_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofscomm_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofscomm_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofscomm_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofscomm_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofscomm_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSComments
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
     * @ORM\Column(name="plugintype", type="string", length=255, nullable=false)
     */
    private $plugintype;

    /**
     * @var string
     *
     * @ORM\Column(name="plugincode", type="string", length=255, nullable=false)
     */
    private $plugincode;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectid", type="bigint", nullable=false)
     */
    private $objectid;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=false)
     */
    private $personid;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;


}
