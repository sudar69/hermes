<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSInvsets
 *
 * @ORM\Table(name="mdl_block_dof_s_invsets", indexes={@ORM\Index(name="mdl_blocdofsinvs_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsinvs_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsinvs_inv_ix", columns={"invcategoryid"}), @ORM\Index(name="mdl_blocdofsinvs_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsinvs_per_ix", columns={"personid"}), @ORM\Index(name="mdl_blocdofsinvs_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSInvsets
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
     * @ORM\Column(name="code", type="string", length=30, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="invcategoryid", type="bigint", nullable=true)
     */
    private $invcategoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=false)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=true)
     */
    private $personid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;


}
