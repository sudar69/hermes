<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSInvcategories
 *
 * @ORM\Table(name="mdl_block_dof_s_invcategories", indexes={@ORM\Index(name="mdl_blocdofsinvc_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsinvc_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsinvc_par_ix", columns={"parentid"}), @ORM\Index(name="mdl_blocdofsinvc_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsinvc_pat_ix", columns={"path"}), @ORM\Index(name="mdl_blocdofsinvc_dep2_ix", columns={"depth"}), @ORM\Index(name="mdl_blocdofsinvc_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSInvcategories
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
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="bigint", nullable=true)
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=false)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="bigint", nullable=true)
     */
    private $depth;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
