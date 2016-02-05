<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSCstreamlinks
 *
 * @ORM\Table(name="mdl_block_dof_s_cstreamlinks", indexes={@ORM\Index(name="mdl_blocdofscstr_cst_ix", columns={"cstreamid"}), @ORM\Index(name="mdl_blocdofscstr_agr_ix", columns={"agroupid"}), @ORM\Index(name="mdl_blocdofscstr_agr2_ix", columns={"agroupsync"})})
 * @ORM\Entity
 */
class MdlBlockDofSCstreamlinks
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
     * @ORM\Column(name="cstreamid", type="bigint", nullable=true)
     */
    private $cstreamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agroupid", type="bigint", nullable=true)
     */
    private $agroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="agroupsync", type="string", length=20, nullable=false)
     */
    private $agroupsync;


}
