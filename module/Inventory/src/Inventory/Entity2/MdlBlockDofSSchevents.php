<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSSchevents
 *
 * @ORM\Table(name="mdl_block_dof_s_schevents", indexes={@ORM\Index(name="mdl_blocdofssche_tem_ix", columns={"templateid"}), @ORM\Index(name="mdl_blocdofssche_day_ix", columns={"dayid"}), @ORM\Index(name="mdl_blocdofssche_pla_ix", columns={"planid"}), @ORM\Index(name="mdl_blocdofssche_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofssche_joi_ix", columns={"joinid"}), @ORM\Index(name="mdl_blocdofssche_cst_ix", columns={"cstreamid"}), @ORM\Index(name="mdl_blocdofssche_tea_ix", columns={"teacherid"}), @ORM\Index(name="mdl_blocdofssche_dat_ix", columns={"date"}), @ORM\Index(name="mdl_blocdofssche_rep_ix", columns={"replaceid"}), @ORM\Index(name="mdl_blocdofssche_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofssche_for_ix", columns={"form"}), @ORM\Index(name="mdl_blocdofssche_app_ix", columns={"appointmentid"}), @ORM\Index(name="mdl_blocdofssche_aho_ix", columns={"ahours"}), @ORM\Index(name="mdl_blocdofssche_sal_ix", columns={"salfactor"}), @ORM\Index(name="mdl_blocdofssche_rho_ix", columns={"rhours"})})
 * @ORM\Entity
 */
class MdlBlockDofSSchevents
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
     * @ORM\Column(name="templateid", type="bigint", nullable=true)
     */
    private $templateid;

    /**
     * @var integer
     *
     * @ORM\Column(name="dayid", type="bigint", nullable=true)
     */
    private $dayid;

    /**
     * @var integer
     *
     * @ORM\Column(name="planid", type="bigint", nullable=true)
     */
    private $planid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="joinid", type="bigint", nullable=false)
     */
    private $joinid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cstreamid", type="bigint", nullable=true)
     */
    private $cstreamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacherid", type="bigint", nullable=true)
     */
    private $teacherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="bigint", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="bigint", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var integer
     *
     * @ORM\Column(name="replaceid", type="bigint", nullable=true)
     */
    private $replaceid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="form", type="string", length=20, nullable=true)
     */
    private $form;

    /**
     * @var integer
     *
     * @ORM\Column(name="appointmentid", type="bigint", nullable=true)
     */
    private $appointmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ahours", type="bigint", nullable=true)
     */
    private $ahours;

    /**
     * @var float
     *
     * @ORM\Column(name="salfactor", type="float", precision=6, scale=2, nullable=false)
     */
    private $salfactor;

    /**
     * @var string
     *
     * @ORM\Column(name="salfactorparts", type="text", nullable=true)
     */
    private $salfactorparts;

    /**
     * @var float
     *
     * @ORM\Column(name="rhours", type="float", precision=6, scale=2, nullable=true)
     */
    private $rhours;


}
