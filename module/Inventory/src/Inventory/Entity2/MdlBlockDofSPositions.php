<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSPositions
 *
 * @ORM\Table(name="mdl_block_dof_s_positions", indexes={@ORM\Index(name="mdl_blocdofsposi_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsposi_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsposi_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsposi_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSPositions
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
