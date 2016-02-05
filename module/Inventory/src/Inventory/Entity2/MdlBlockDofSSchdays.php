<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSchdays
 *
 * @ORM\Table(name="mdl_block_dof_s_schdays", indexes={@ORM\Index(name="mdl_blocdofsschd_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofsschd_age_ix", columns={"ageid"}), @ORM\Index(name="mdl_blocdofsschd_day_ix", columns={"daynum"}), @ORM\Index(name="mdl_blocdofsschd_day2_ix", columns={"dayvar"}), @ORM\Index(name="mdl_blocdofsschd_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofsschd_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsschd_typ_ix", columns={"type"})})
 * @ORM\Entity
 */
class MdlBlockDofSSchdays
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
     * @ORM\Column(name="ageid", type="bigint", nullable=false)
     */
    private $ageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=false)
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="daynum", type="boolean", nullable=true)
     */
    private $daynum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dayvar", type="boolean", nullable=true)
     */
    private $dayvar;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
