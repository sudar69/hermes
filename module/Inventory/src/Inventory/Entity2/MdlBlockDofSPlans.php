<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSPlans
 *
 * @ORM\Table(name="mdl_block_dof_s_plans", indexes={@ORM\Index(name="mdl_blocdofsplan_lin_ix", columns={"linkid"}), @ORM\Index(name="mdl_blocdofsplan_lin2_ix", columns={"linktype"}), @ORM\Index(name="mdl_blocdofsplan_par_ix", columns={"parentid"}), @ORM\Index(name="mdl_blocdofsplan_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsplan_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofsplan_rel_ix", columns={"reldate"}), @ORM\Index(name="mdl_blocdofsplan_rel2_ix", columns={"reldldate"}), @ORM\Index(name="mdl_blocdofsplan_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsplan_typ2_ix", columns={"typesync"}), @ORM\Index(name="mdl_blocdofsplan_mdl_ix", columns={"mdlinstance"}), @ORM\Index(name="mdl_blocdofsplan_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsplan_hom_ix", columns={"homeworkhours"}), @ORM\Index(name="mdl_blocdofsplan_dir_ix", columns={"directmap"}), @ORM\Index(name="mdl_blocdofsplan_num_ix", columns={"number"}), @ORM\Index(name="mdl_blocdofsplan_dat2_ix", columns={"datetheme"}), @ORM\Index(name="mdl_blocdofsplan_pla2_ix", columns={"plansectionsid"})})
 * @ORM\Entity
 */
class MdlBlockDofSPlans
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
     * @ORM\Column(name="linkid", type="bigint", nullable=true)
     */
    private $linkid;

    /**
     * @var string
     *
     * @ORM\Column(name="linktype", type="string", length=20, nullable=true)
     */
    private $linktype;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="bigint", nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="reldate", type="bigint", nullable=true)
     */
    private $reldate;

    /**
     * @var integer
     *
     * @ORM\Column(name="reldldate", type="bigint", nullable=true)
     */
    private $reldldate;

    /**
     * @var string
     *
     * @ORM\Column(name="scale", type="string", length=255, nullable=true)
     */
    private $scale;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="typesync", type="string", length=20, nullable=true)
     */
    private $typesync;

    /**
     * @var integer
     *
     * @ORM\Column(name="mdlinstance", type="bigint", nullable=true)
     */
    private $mdlinstance;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="homework", type="text", nullable=true)
     */
    private $homework;

    /**
     * @var integer
     *
     * @ORM\Column(name="homeworkhours", type="bigint", nullable=true)
     */
    private $homeworkhours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="directmap", type="boolean", nullable=true)
     */
    private $directmap;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="bigint", nullable=true)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="datetheme", type="bigint", nullable=true)
     */
    private $datetheme;

    /**
     * @var integer
     *
     * @ORM\Column(name="plansectionsid", type="bigint", nullable=true)
     */
    private $plansectionsid;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;


}
