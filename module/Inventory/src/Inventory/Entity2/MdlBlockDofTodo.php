<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofTodo
 *
 * @ORM\Table(name="mdl_block_dof_todo", indexes={@ORM\Index(name="mdl_blocdoftodo_exd_ix", columns={"exdate"}), @ORM\Index(name="mdl_blocdoftodo_tod_ix", columns={"tododate"}), @ORM\Index(name="mdl_blocdoftodo_loa_ix", columns={"loan"}), @ORM\Index(name="mdl_blocdoftodo_per_ix", columns={"personid"})})
 * @ORM\Entity
 */
class MdlBlockDofTodo
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
     * @ORM\Column(name="plugintype", type="string", length=20, nullable=false)
     */
    private $plugintype;

    /**
     * @var string
     *
     * @ORM\Column(name="plugincode", type="string", length=20, nullable=false)
     */
    private $plugincode;

    /**
     * @var string
     *
     * @ORM\Column(name="todocode", type="string", length=50, nullable=false)
     */
    private $todocode;

    /**
     * @var integer
     *
     * @ORM\Column(name="intvar", type="bigint", nullable=true)
     */
    private $intvar;

    /**
     * @var string
     *
     * @ORM\Column(name="mixedvar", type="text", nullable=true)
     */
    private $mixedvar;

    /**
     * @var integer
     *
     * @ORM\Column(name="loan", type="bigint", nullable=false)
     */
    private $loan;

    /**
     * @var integer
     *
     * @ORM\Column(name="tododate", type="bigint", nullable=false)
     */
    private $tododate;

    /**
     * @var integer
     *
     * @ORM\Column(name="exdate", type="bigint", nullable=false)
     */
    private $exdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="personid", type="bigint", nullable=false)
     */
    private $personid;


}
