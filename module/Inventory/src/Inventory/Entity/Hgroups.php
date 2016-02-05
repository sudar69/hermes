<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Hgroups
 *
 * @ORM\Table(name="hgroups")
 * @ORM\Entity
 * @Annotation\Name("hgroups")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class Hgroups extends Huserbywhen
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Annotation\Exclude()
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="CONNECTTYPE", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Type("Zend\Form\Element\Select")
     * @Annotation\Attributes({"options":{"1":"COM-port","2":"modem","3":"TCP","4":"UDP","5":"Maket","6":"DataSnap"}})
     * @Annotation\Options({"label":"Тип подключения"})
     */
    private $connecttype;

    /**
     * @var string
     *
     * @ORM\Column(name="CONNECTVALUE", type="string", length=40, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":40}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Значение подключения"})
     */
    private $connectvalue;

    /**
     * @var float
     *
     * @ORM\Column(name="SPEED", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Скорость порта"})
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="DISPNAME", type="string", length=120, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":120}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Наименование"})
     */
    private $dispname;

    /**
     * @var float
     *
     * @ORM\Column(name="ACTIVE", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Активность"})
     */
    private $active;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCKACTIVE", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Активность блокировки"})
     */
    private $blockactive;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCKCOUNT", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Количество неудачных попыток"})
     */
    private $blockcount;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCKMIN", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Период блокировки, мин"})
     */
    private $blockmin;

    /**
     * @var float
     *
     * @ORM\Column(name="ORDER_ID", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Exclude()
     */
    private $orderId;

    /**
     * @var float
     *
     * @ORM\Column(name="READTIMEOUT", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Таумаут чтения, мс"})
     */
    private $readtimeout;

    /**
     * @var float
     *
     * @ORM\Column(name="IOTIMEQUOTA", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Количество неудачных попыток"})
     */
    private $iotimequota;

    /**
     * @var float
     *
     * @ORM\Column(name="REMOTE_PORT", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Exclude()
     */
    private $remotePort;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIORITY", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Приоритет"})
     */
    private $priority;

    /**
     * @var float
     *
     * @ORM\Column(name="READINTERVALTIMEOUT", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Таумаут чтения, мс"})
     */
    private $readintervaltimeout;

    /**
     * @var float
     *
     * @ORM\Column(name="READTOTALTIMEOUTMULTIPLIER", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Множитель чтения"})
     */
    private $readtotaltimeoutmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="READTOTALTIMEOUTCONSTANT", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Константа чтения, мс"})
     */
    private $readtotaltimeoutconstant;

    /**
     * @var float
     *
     * @ORM\Column(name="WRITETOTALTIMEOUTMULTIPLIER", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Множитель записи"})
     */
    private $writetotaltimeoutmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="WRITETOTALTIMEOUTCONSTANT", type="float", precision=10, scale=0, nullable=false)
     * @Annotation\Required({"required":"true" })
     * @Annotation\Validator({"name":"digits"})
     
     * @Annotation\Options({"label":"Константа записи, мс"})
     */
    private $writetotaltimeoutconstant;

    /**
     * @var float
     *
     * @ORM\Column(name="LOCAL_PORT", type="float", precision=10, scale=0, nullable=true)
     * @Annotation\Exclude()
     */
    private $localPort;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTION_BEFORE_LOCK", type="string", length=500, nullable=true)
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":500}})
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Скрипт перед блокировкой"})
     */
    private $actionBeforeLock;

    /**
     * @var \Inventory\Entity\Hgroups
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\Hgroups")
     * @ORM\JoinColumn(name="GROUPID", referencedColumnName="ID", nullable=true)
     * @Annotation\Exclude()
     */
    private $parentId  = null;



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
     * Set connecttype
     *
     * @param float $connecttype
     * @return Hgroups
     */
    public function setConnecttype($connecttype)
    {
        $this->connecttype = $connecttype;

        return $this;
    }

    /**
     * Get connecttype
     *
     * @return float 
     */
    public function getConnecttype()
    {
        return $this->connecttype;
    }

    /**
     * Set connectvalue
     *
     * @param string $connectvalue
     * @return Hgroups
     */
    public function setConnectvalue($connectvalue)
    {
        $this->connectvalue = $connectvalue;

        return $this;
    }

    /**
     * Get connectvalue
     *
     * @return string 
     */
    public function getConnectvalue()
    {
        return $this->connectvalue;
    }

    /**
     * Set speed
     *
     * @param float $speed
     * @return Hgroups
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return float 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set dispname
     *
     * @param string $dispname
     * @return Hgroups
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
     * @return Hgroups
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
     * Set blockactive
     *
     * @param float $blockactive
     * @return Hgroups
     */
    public function setBlockactive($blockactive)
    {
        $this->blockactive = $blockactive;

        return $this;
    }

    /**
     * Get blockactive
     *
     * @return float 
     */
    public function getBlockactive()
    {
        return $this->blockactive;
    }

    /**
     * Set blockcount
     *
     * @param float $blockcount
     * @return Hgroups
     */
    public function setBlockcount($blockcount)
    {
        $this->blockcount = $blockcount;

        return $this;
    }

    /**
     * Get blockcount
     *
     * @return float 
     */
    public function getBlockcount()
    {
        return $this->blockcount;
    }

    /**
     * Set blockmin
     *
     * @param float $blockmin
     * @return Hgroups
     */
    public function setBlockmin($blockmin)
    {
        $this->blockmin = $blockmin;

        return $this;
    }

    /**
     * Get blockmin
     *
     * @return float 
     */
    public function getBlockmin()
    {
        return $this->blockmin;
    }

    /**
     * Set orderId
     *
     * @param float $orderId
     * @return Hgroups
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
     * Set readtimeout
     *
     * @param float $readtimeout
     * @return Hgroups
     */
    public function setReadtimeout($readtimeout)
    {
        $this->readtimeout = $readtimeout;

        return $this;
    }

    /**
     * Get readtimeout
     *
     * @return float 
     */
    public function getReadtimeout()
    {
        return $this->readtimeout;
    }

    /**
     * Set iotimequota
     *
     * @param float $iotimequota
     * @return Hgroups
     */
    public function setIotimequota($iotimequota)
    {
        $this->iotimequota = $iotimequota;

        return $this;
    }

    /**
     * Get iotimequota
     *
     * @return float 
     */
    public function getIotimequota()
    {
        return $this->iotimequota;
    }

    /**
     * Set remotePort
     *
     * @param float $remotePort
     * @return Hgroups
     */
    public function setRemotePort($remotePort)
    {
        $this->remotePort = $remotePort;

        return $this;
    }

    /**
     * Get remotePort
     *
     * @return float 
     */
    public function getRemotePort()
    {
        return $this->remotePort;
    }

    /**
     * Set priority
     *
     * @param float $priority
     * @return Hgroups
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
     * Set readintervaltimeout
     *
     * @param float $readintervaltimeout
     * @return Hgroups
     */
    public function setReadintervaltimeout($readintervaltimeout)
    {
        $this->readintervaltimeout = $readintervaltimeout;

        return $this;
    }

    /**
     * Get readintervaltimeout
     *
     * @return float 
     */
    public function getReadintervaltimeout()
    {
        return $this->readintervaltimeout;
    }

    /**
     * Set readtotaltimeoutmultiplier
     *
     * @param float $readtotaltimeoutmultiplier
     * @return Hgroups
     */
    public function setReadtotaltimeoutmultiplier($readtotaltimeoutmultiplier)
    {
        $this->readtotaltimeoutmultiplier = $readtotaltimeoutmultiplier;

        return $this;
    }

    /**
     * Get readtotaltimeoutmultiplier
     *
     * @return float 
     */
    public function getReadtotaltimeoutmultiplier()
    {
        return $this->readtotaltimeoutmultiplier;
    }

    /**
     * Set readtotaltimeoutconstant
     *
     * @param float $readtotaltimeoutconstant
     * @return Hgroups
     */
    public function setReadtotaltimeoutconstant($readtotaltimeoutconstant)
    {
        $this->readtotaltimeoutconstant = $readtotaltimeoutconstant;

        return $this;
    }

    /**
     * Get readtotaltimeoutconstant
     *
     * @return float 
     */
    public function getReadtotaltimeoutconstant()
    {
        return $this->readtotaltimeoutconstant;
    }

    /**
     * Set writetotaltimeoutmultiplier
     *
     * @param float $writetotaltimeoutmultiplier
     * @return Hgroups
     */
    public function setWritetotaltimeoutmultiplier($writetotaltimeoutmultiplier)
    {
        $this->writetotaltimeoutmultiplier = $writetotaltimeoutmultiplier;

        return $this;
    }

    /**
     * Get writetotaltimeoutmultiplier
     *
     * @return float 
     */
    public function getWritetotaltimeoutmultiplier()
    {
        return $this->writetotaltimeoutmultiplier;
    }

    /**
     * Set writetotaltimeoutconstant
     *
     * @param float $writetotaltimeoutconstant
     * @return Hgroups
     */
    public function setWritetotaltimeoutconstant($writetotaltimeoutconstant)
    {
        $this->writetotaltimeoutconstant = $writetotaltimeoutconstant;

        return $this;
    }

    /**
     * Get writetotaltimeoutconstant
     *
     * @return float 
     */
    public function getWritetotaltimeoutconstant()
    {
        return $this->writetotaltimeoutconstant;
    }

    /**
     * Set localPort
     *
     * @param float $localPort
     * @return Hgroups
     */
    public function setLocalPort($localPort)
    {
        $this->localPort = $localPort;

        return $this;
    }

    /**
     * Get localPort
     *
     * @return float 
     */
    public function getLocalPort()
    {
        return $this->localPort;
    }

    /**
     * Set actionBeforeLock
     *
     * @param string $actionBeforeLock
     * @return Hgroups
     */
    public function setActionBeforeLock($actionBeforeLock)
    {
        $this->actionBeforeLock = $actionBeforeLock;

        return $this;
    }

    /**
     * Get actionBeforeLock
     *
     * @return string 
     */
    public function getActionBeforeLock()
    {
        return $this->actionBeforeLock;
    }

    /**
     * Set parentid
     *
     * @param \Inventory\Entity\Hgroups $groupid
     * @return Hdevices
     */
    public function setParentid($groupid)
    {
        $this->parentId = $groupid;
        return $this;
    }

    /**
     * Get parentid
     *
     * @return \Inventory\Entity\Hgroups 
     */
    public function getParentid()
    {
        return $this->parentId;
    }
    
    /**
     * Helper function.
     */
    public function exchangeArray($data)
    {
        foreach ($data as $key => $val) {
            if (property_exists($this, $key)) {
                $this->$key = (!empty($val)) ? $val : null;
            }
        }
    }
    /**
     * Helper function
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
