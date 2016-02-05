<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hdevices
 *
 * @ORM\Table(name="hdevices", indexes={@ORM\Index(name="FK_DEVICES_GROUP_ID", columns={"GROUPID"})})
 * @ORM\Entity
 */
class Hdevices
{
    /**
     * @var float
     *
     * @ORM\Column(name="ID", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DISPNAME", type="string", length=120, nullable=true)
     */
    private $dispname;

    /**
     * @var float
     *
     * @ORM\Column(name="ACTIVE", type="float", precision=10, scale=0, nullable=true)
     */
    private $active;

    /**
     * @var float
     *
     * @ORM\Column(name="TYPEDEVICE_ID", type="float", precision=10, scale=0, nullable=true)
     */
    private $typedeviceId;

    /**
     * @var float
     *
     * @ORM\Column(name="LINKTOFIDER", type="float", precision=10, scale=0, nullable=true)
     */
    private $linktofider;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSFORREADING", type="string", length=8, nullable=true)
     */
    private $passforreading;

    /**
     * @var float
     *
     * @ORM\Column(name="LOGICALID", type="float", precision=10, scale=0, nullable=true)
     */
    private $logicalid;

    /**
     * @var float
     *
     * @ORM\Column(name="PHYSICALID", type="float", precision=10, scale=0, nullable=true)
     */
    private $physicalid;

    /**
     * @var float
     *
     * @ORM\Column(name="PERIOD", type="float", precision=10, scale=0, nullable=true)
     */
    private $period;

    /**
     * @var float
     *
     * @ORM\Column(name="CLIENTTYPE", type="float", precision=10, scale=0, nullable=false)
     */
    private $clienttype;

    /**
     * @var float
     *
     * @ORM\Column(name="VIRTUALTYPEDEVICE_ID", type="float", precision=10, scale=0, nullable=true)
     */
    private $virtualtypedeviceId;

    /**
     * @var float
     *
     * @ORM\Column(name="KTN", type="float", precision=10, scale=0, nullable=true)
     */
    private $ktn;

    /**
     * @var float
     *
     * @ORM\Column(name="KTT", type="float", precision=10, scale=0, nullable=true)
     */
    private $ktt;

    /**
     * @var float
     *
     * @ORM\Column(name="SERIALNUM", type="float", precision=10, scale=0, nullable=true)
     */
    private $serialnum;

    /**
     * @var float
     *
     * @ORM\Column(name="KOEFINDEV", type="float", precision=10, scale=0, nullable=true)
     */
    private $koefindev;

    /**
     * @var float
     *
     * @ORM\Column(name="DIRECTENERGY", type="float", precision=10, scale=0, nullable=false)
     */
    private $directenergy;

    /**
     * @var float
     *
     * @ORM\Column(name="ORDER_ID", type="float", precision=10, scale=0, nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSFORWRITING", type="string", length=8, nullable=true)
     */
    private $passforwriting;

    /**
     * @var float
     *
     * @ORM\Column(name="KTPE", type="float", precision=10, scale=0, nullable=true)
     */
    private $ktpe;

    /**
     * @var float
     *
     * @ORM\Column(name="ACCESSLEVEL", type="float", precision=10, scale=0, nullable=false)
     */
    private $accesslevel;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIORITY", type="float", precision=10, scale=0, nullable=false)
     */
    private $priority;

    /**
     * @var float
     *
     * @ORM\Column(name="CUSTOM_PERIOD", type="float", precision=10, scale=0, nullable=false)
     */
    private $customPeriod;

    /**
     * @var float
     *
     * @ORM\Column(name="CALC_ENERGY_TYPE", type="float", precision=10, scale=0, nullable=false)
     */
    private $calcEnergyType;

    /**
     * @var \Inventory\Entity\Hgroups
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\Hgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GROUPID", referencedColumnName="ID")
     * })
     */
    private $parentid;



    /**
     * Get id
     *
     * @return float 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dispname
     *
     * @param string $dispname
     * @return Hdevices
     */
    public function setDispname($dispname)
    {
        $this->dispname = $dispname;

        return $this;
    }

    /**
     * Get dispname
     *
     * @return string 
     */
    public function getDispname()
    {
        return $this->dispname;
    }

    /**
     * Set active
     *
     * @param float $active
     * @return Hdevices
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return float 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set typedeviceId
     *
     * @param float $typedeviceId
     * @return Hdevices
     */
    public function setTypedeviceId($typedeviceId)
    {
        $this->typedeviceId = $typedeviceId;

        return $this;
    }

    /**
     * Get typedeviceId
     *
     * @return float 
     */
    public function getTypedeviceId()
    {
        return $this->typedeviceId;
    }

    /**
     * Set linktofider
     *
     * @param float $linktofider
     * @return Hdevices
     */
    public function setLinktofider($linktofider)
    {
        $this->linktofider = $linktofider;

        return $this;
    }

    /**
     * Get linktofider
     *
     * @return float 
     */
    public function getLinktofider()
    {
        return $this->linktofider;
    }

    /**
     * Set passforreading
     *
     * @param string $passforreading
     * @return Hdevices
     */
    public function setPassforreading($passforreading)
    {
        $this->passforreading = $passforreading;

        return $this;
    }

    /**
     * Get passforreading
     *
     * @return string 
     */
    public function getPassforreading()
    {
        return $this->passforreading;
    }

    /**
     * Set logicalid
     *
     * @param float $logicalid
     * @return Hdevices
     */
    public function setLogicalid($logicalid)
    {
        $this->logicalid = $logicalid;

        return $this;
    }

    /**
     * Get logicalid
     *
     * @return float 
     */
    public function getLogicalid()
    {
        return $this->logicalid;
    }

    /**
     * Set physicalid
     *
     * @param float $physicalid
     * @return Hdevices
     */
    public function setPhysicalid($physicalid)
    {
        $this->physicalid = $physicalid;

        return $this;
    }

    /**
     * Get physicalid
     *
     * @return float 
     */
    public function getPhysicalid()
    {
        return $this->physicalid;
    }

    /**
     * Set period
     *
     * @param float $period
     * @return Hdevices
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return float 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set clienttype
     *
     * @param float $clienttype
     * @return Hdevices
     */
    public function setClienttype($clienttype)
    {
        $this->clienttype = $clienttype;

        return $this;
    }

    /**
     * Get clienttype
     *
     * @return float 
     */
    public function getClienttype()
    {
        return $this->clienttype;
    }

    /**
     * Set virtualtypedeviceId
     *
     * @param float $virtualtypedeviceId
     * @return Hdevices
     */
    public function setVirtualtypedeviceId($virtualtypedeviceId)
    {
        $this->virtualtypedeviceId = $virtualtypedeviceId;

        return $this;
    }

    /**
     * Get virtualtypedeviceId
     *
     * @return float 
     */
    public function getVirtualtypedeviceId()
    {
        return $this->virtualtypedeviceId;
    }

    /**
     * Set ktn
     *
     * @param float $ktn
     * @return Hdevices
     */
    public function setKtn($ktn)
    {
        $this->ktn = $ktn;

        return $this;
    }

    /**
     * Get ktn
     *
     * @return float 
     */
    public function getKtn()
    {
        return $this->ktn;
    }

    /**
     * Set ktt
     *
     * @param float $ktt
     * @return Hdevices
     */
    public function setKtt($ktt)
    {
        $this->ktt = $ktt;

        return $this;
    }

    /**
     * Get ktt
     *
     * @return float 
     */
    public function getKtt()
    {
        return $this->ktt;
    }

    /**
     * Set serialnum
     *
     * @param float $serialnum
     * @return Hdevices
     */
    public function setSerialnum($serialnum)
    {
        $this->serialnum = $serialnum;

        return $this;
    }

    /**
     * Get serialnum
     *
     * @return float 
     */
    public function getSerialnum()
    {
        return $this->serialnum;
    }

    /**
     * Set koefindev
     *
     * @param float $koefindev
     * @return Hdevices
     */
    public function setKoefindev($koefindev)
    {
        $this->koefindev = $koefindev;

        return $this;
    }

    /**
     * Get koefindev
     *
     * @return float 
     */
    public function getKoefindev()
    {
        return $this->koefindev;
    }

    /**
     * Set directenergy
     *
     * @param float $directenergy
     * @return Hdevices
     */
    public function setDirectenergy($directenergy)
    {
        $this->directenergy = $directenergy;

        return $this;
    }

    /**
     * Get directenergy
     *
     * @return float 
     */
    public function getDirectenergy()
    {
        return $this->directenergy;
    }

    /**
     * Set orderId
     *
     * @param float $orderId
     * @return Hdevices
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return float 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set passforwriting
     *
     * @param string $passforwriting
     * @return Hdevices
     */
    public function setPassforwriting($passforwriting)
    {
        $this->passforwriting = $passforwriting;

        return $this;
    }

    /**
     * Get passforwriting
     *
     * @return string 
     */
    public function getPassforwriting()
    {
        return $this->passforwriting;
    }

    /**
     * Set ktpe
     *
     * @param float $ktpe
     * @return Hdevices
     */
    public function setKtpe($ktpe)
    {
        $this->ktpe = $ktpe;

        return $this;
    }

    /**
     * Get ktpe
     *
     * @return float 
     */
    public function getKtpe()
    {
        return $this->ktpe;
    }

    /**
     * Set accesslevel
     *
     * @param float $accesslevel
     * @return Hdevices
     */
    public function setAccesslevel($accesslevel)
    {
        $this->accesslevel = $accesslevel;

        return $this;
    }

    /**
     * Get accesslevel
     *
     * @return float 
     */
    public function getAccesslevel()
    {
        return $this->accesslevel;
    }

    /**
     * Set priority
     *
     * @param float $priority
     * @return Hdevices
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return float 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set customPeriod
     *
     * @param float $customPeriod
     * @return Hdevices
     */
    public function setCustomPeriod($customPeriod)
    {
        $this->customPeriod = $customPeriod;

        return $this;
    }

    /**
     * Get customPeriod
     *
     * @return float 
     */
    public function getCustomPeriod()
    {
        return $this->customPeriod;
    }

    /**
     * Set calcEnergyType
     *
     * @param float $calcEnergyType
     * @return Hdevices
     */
    public function setCalcEnergyType($calcEnergyType)
    {
        $this->calcEnergyType = $calcEnergyType;

        return $this;
    }

    /**
     * Get calcEnergyType
     *
     * @return float 
     */
    public function getCalcEnergyType()
    {
        return $this->calcEnergyType;
    }

    /**
     * Set parentid
     *
     * @param \Inventory\Entity\Hgroups $groupid
     * @return Hdevices
     */
    public function setGroupid(\Inventory\Entity\Hgroups $parentid = null)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return \Inventory\Entity\Hgroups 
     */
    public function getGroupid()
    {
        return $this->parentid;
    }
}
