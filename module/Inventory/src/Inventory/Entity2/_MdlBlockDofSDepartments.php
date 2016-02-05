<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSDepartments
 *
 * @ORM\Table(name="mdl_block_dof_s_departments", indexes={@ORM\Index(name="mdl_blocdofsdepa_nam_ix", columns={"name"}), @ORM\Index(name="mdl_blocdofsdepa_cod_ix", columns={"code"}), @ORM\Index(name="mdl_blocdofsdepa_man_ix", columns={"managerid"}), @ORM\Index(name="mdl_blocdofsdepa_lea_ix", columns={"leaddepid"}), @ORM\Index(name="mdl_blocdofsdepa_add_ix", columns={"addressid"}), @ORM\Index(name="mdl_blocdofsdepa_zon_ix", columns={"zone"}), @ORM\Index(name="mdl_blocdofsdepa_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofsdepa_pat_ix", columns={"path"}), @ORM\Index(name="mdl_blocdofsdepa_dep_ix", columns={"depth"})})
 * @ORM\Entity
 */
class MdlBlockDofSDepartments
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
     * @ORM\Column(name="managerid", type="bigint", nullable=true)
     */
    private $managerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="leaddepid", type="bigint", nullable=false)
     */
    private $leaddepid;

    /**
     * @var integer
     *
     * @ORM\Column(name="addressid", type="bigint", nullable=true)
     */
    private $addressid;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=100, nullable=true)
     */
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MdlBlockDofSDepartments
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return MdlBlockDofSDepartments
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set managerid
     *
     * @param integer $managerid
     * @return MdlBlockDofSDepartments
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return integer 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * Set leaddepid
     *
     * @param integer $leaddepid
     * @return MdlBlockDofSDepartments
     */
    public function setLeaddepid($leaddepid)
    {
        $this->leaddepid = $leaddepid;

        return $this;
    }

    /**
     * Get leaddepid
     *
     * @return integer 
     */
    public function getLeaddepid()
    {
        return $this->leaddepid;
    }

    /**
     * Set addressid
     *
     * @param integer $addressid
     * @return MdlBlockDofSDepartments
     */
    public function setAddressid($addressid)
    {
        $this->addressid = $addressid;

        return $this;
    }

    /**
     * Get addressid
     *
     * @return integer 
     */
    public function getAddressid()
    {
        return $this->addressid;
    }

    /**
     * Set zone
     *
     * @param string $zone
     * @return MdlBlockDofSDepartments
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return MdlBlockDofSDepartments
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

    /**
     * Set path
     *
     * @param string $path
     * @return MdlBlockDofSDepartments
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return MdlBlockDofSDepartments
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
