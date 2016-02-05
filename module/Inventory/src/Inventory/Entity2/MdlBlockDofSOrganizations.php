<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSOrganizations
 *
 * @ORM\Table(name="mdl_block_dof_s_organizations", indexes={@ORM\Index(name="mdl_blocdofsorga_ful_ix", columns={"fullname"}), @ORM\Index(name="mdl_blocdofsorga_sho_ix", columns={"shortname"}), @ORM\Index(name="mdl_blocdofsorga_inn_ix", columns={"inn"}), @ORM\Index(name="mdl_blocdofsorga_kpp_ix", columns={"kpp"}), @ORM\Index(name="mdl_blocdofsorga_ogr_ix", columns={"ogrn"}), @ORM\Index(name="mdl_blocdofsorga_leg_ix", columns={"legaladdressid"}), @ORM\Index(name="mdl_blocdofsorga_cur_ix", columns={"currentaddressid"}), @ORM\Index(name="mdl_blocdofsorga_mai_ix", columns={"mailingaddressid"}), @ORM\Index(name="mdl_blocdofsorga_hea_ix", columns={"head"}), @ORM\Index(name="mdl_blocdofsorga_pos_ix", columns={"posthead"})})
 * @ORM\Entity
 */
class MdlBlockDofSOrganizations
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
     * @ORM\Column(name="fullname", type="string", length=255, nullable=true)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=255, nullable=true)
     */
    private $shortname;

    /**
     * @var integer
     *
     * @ORM\Column(name="inn", type="bigint", nullable=true)
     */
    private $inn;

    /**
     * @var integer
     *
     * @ORM\Column(name="kpp", type="integer", nullable=true)
     */
    private $kpp;

    /**
     * @var integer
     *
     * @ORM\Column(name="ogrn", type="bigint", nullable=true)
     */
    private $ogrn;

    /**
     * @var string
     *
     * @ORM\Column(name="bankrequisites", type="string", length=255, nullable=true)
     */
    private $bankrequisites;

    /**
     * @var integer
     *
     * @ORM\Column(name="legaladdressid", type="bigint", nullable=true)
     */
    private $legaladdressid;

    /**
     * @var integer
     *
     * @ORM\Column(name="currentaddressid", type="bigint", nullable=true)
     */
    private $currentaddressid;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailingaddressid", type="bigint", nullable=true)
     */
    private $mailingaddressid;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalrequisites", type="string", length=255, nullable=true)
     */
    private $additionalrequisites;

    /**
     * @var string
     *
     * @ORM\Column(name="head", type="string", length=255, nullable=true)
     */
    private $head;

    /**
     * @var string
     *
     * @ORM\Column(name="posthead", type="string", length=255, nullable=true)
     */
    private $posthead;

    /**
     * @var string
     *
     * @ORM\Column(name="actionhead", type="string", length=255, nullable=true)
     */
    private $actionhead;


}
