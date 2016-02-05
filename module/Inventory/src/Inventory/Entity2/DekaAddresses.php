<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * DekaAddresses
 *
 * @ORM\Table(name="mdl_block_dof_s_addresses", indexes={@ORM\Index(name="mdl_blocdofsaddr_typ_ix", columns={"type"}), @ORM\Index(name="mdl_blocdofsaddr_cou_ix", columns={"country"}), @ORM\Index(name="mdl_blocdofsaddr_reg_ix", columns={"region"}), @ORM\Index(name="mdl_blocdofsaddr_cou2_ix", columns={"county"}), @ORM\Index(name="mdl_blocdofsaddr_cit_ix", columns={"city"}), @ORM\Index(name="mdl_blocdofsaddr_str_ix", columns={"streetname"}), @ORM\Index(name="mdl_blocdofsaddr_lat_ix", columns={"latitude"}), @ORM\Index(name="mdl_blocdofsaddr_lon_ix", columns={"longitude"}), @ORM\Index(name="mdl_blocdofsaddr_sta_ix", columns={"status"})})
 * @ORM\Entity
 */
class DekaAddresses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=10, precision=0, scale=0, nullable=true, unique=false)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, precision=0, scale=0, nullable=true, unique=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=6, precision=0, scale=0, nullable=true, unique=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="county", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="streetname", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $streetname;

    /**
     * @var string
     *
     * @ORM\Column(name="streettype", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $streettype;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="gate", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $gate;

    /**
     * @var string
     *
     * @ORM\Column(name="floor", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="apartment", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $apartment;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=7, nullable=true, unique=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=7, nullable=true, unique=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return DekaAddresses
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return DekaAddresses
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return DekaAddresses
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return DekaAddresses
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return DekaAddresses
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return DekaAddresses
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set streetname
     *
     * @param string $streetname
     * @return DekaAddresses
     */
    public function setStreetname($streetname)
    {
        $this->streetname = $streetname;

        return $this;
    }

    /**
     * Get streetname
     *
     * @return string 
     */
    public function getStreetname()
    {
        return $this->streetname;
    }

    /**
     * Set streettype
     *
     * @param string $streettype
     * @return DekaAddresses
     */
    public function setStreettype($streettype)
    {
        $this->streettype = $streettype;

        return $this;
    }

    /**
     * Get streettype
     *
     * @return string 
     */
    public function getStreettype()
    {
        return $this->streettype;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return DekaAddresses
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set gate
     *
     * @param string $gate
     * @return DekaAddresses
     */
    public function setGate($gate)
    {
        $this->gate = $gate;

        return $this;
    }

    /**
     * Get gate
     *
     * @return string 
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * Set floor
     *
     * @param string $floor
     * @return DekaAddresses
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return string 
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set apartment
     *
     * @param string $apartment
     * @return DekaAddresses
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;

        return $this;
    }

    /**
     * Get apartment
     *
     * @return string 
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return DekaAddresses
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return DekaAddresses
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return DekaAddresses
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
