<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSPridepends
 *
 * @ORM\Table(name="mdl_block_dof_s_pridepends", indexes={@ORM\Index(name="mdl_blocdofsprid_pro_ix", columns={"programmitemid"})})
 * @ORM\Entity
 */
class MdlBlockDofSPridepends
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
     * @ORM\Column(name="programmitemid", type="bigint", nullable=false)
     */
    private $programmitemid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


}
