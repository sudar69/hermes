<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSAddresses
 *
 * @ORM\Table(name="mdl_block_dof_s_addresses", indexes={@ORM\Index(name="mdl_blocdofsaddr_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsaddr_cou_ix", columns={"country"}), @ORM\Index(name="mdl_blocdofsaddr_reg_ix", columns={"region"}), @ORM\Index(name="mdl_blocdofsaddr_cou2_ix", columns={"county"}), @ORM\Index(name="mdl_blocdofsaddr_cit_ix", columns={"city"}), @ORM\Index(name="mdl_blocdofsaddr_str_ix", columns={"streetname"}), @ORM\Index(name="mdl_blocdofsaddr_lat_ix", columns={"latitude"}), @ORM\Index(name="mdl_blocdofsaddr_lon_ix", columns={"longitude"}), @ORM\Index(name="mdl_blocdofsaddr_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class MdlBlockDofSAddresses
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
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=10, nullable=true)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=6, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="county", type="string", length=255, nullable=true)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="streetname", type="string", length=255, nullable=true)
     */
    private $streetname;

    /**
     * @var string
     *
     * @ORM\Column(name="streettype", type="string", length=255, nullable=true)
     */
    private $streettype;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="gate", type="string", length=255, nullable=true)
     */
    private $gate;

    /**
     * @var string
     *
     * @ORM\Column(name="floor", type="string", length=255, nullable=true)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="apartment", type="string", length=255, nullable=true)
     */
    private $apartment;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=7, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=7, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}
