<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSMetacontracts
 *
 * @ORM\Table(name="mdl_block_dof_s_metacontracts", indexes={@ORM\Index(name="mdl_blocdofsmeta_org_ix", columns={"organizationid"}), @ORM\Index(name="mdl_blocdofsmeta_num_ix", columns={"num"}), @ORM\Index(name="mdl_blocdofsmeta_dep_ix", columns={"departmentid"})})
 * @ORM\Entity
 */
class MdlBlockDofSMetacontracts
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
     * @var boolean
     *
     * @ORM\Column(name="organizationid", type="boolean", nullable=true)
     */
    private $organizationid;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=100, nullable=true)
     */
    private $num;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="smallint", nullable=false)
     */
    private $departmentid;


}
