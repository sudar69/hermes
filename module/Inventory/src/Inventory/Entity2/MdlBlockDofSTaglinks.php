<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSTaglinks
 *
 * @ORM\Table(name="mdl_block_dof_s_taglinks", uniqueConstraints={@ORM\UniqueConstraint(name="mdl_blocdofstagl_id_uix", columns={"id"})}, indexes={@ORM\Index(name="mdl_blocdofstagl_plu_ix", columns={"plugintype"}), @ORM\Index(name="mdl_blocdofstagl_plu2_ix", columns={"plugincode"}), @ORM\Index(name="mdl_blocdofstagl_obj_ix", columns={"objectid"}), @ORM\Index(name="mdl_blocdofstagl_dep_ix", columns={"departmentid"}), @ORM\Index(name="mdl_blocdofstagl_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofstagl_upd_ix", columns={"updatemark"}), @ORM\Index(name="mdl_blocdofstagl_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSTaglinks
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
     * @ORM\Column(name="tagid", type="bigint", nullable=false)
     */
    private $tagid;

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
     * @var string
     *
     * @ORM\Column(name="sortname", type="string", length=255, nullable=true)
     */
    private $sortname;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=false)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="infotext", type="text", nullable=false)
     */
    private $infotext;

    /**
     * @var string
     *
     * @ORM\Column(name="infoserial", type="text", nullable=true)
     */
    private $infoserial;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="updatemark", type="bigint", nullable=false)
     */
    private $updatemark;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;


}
