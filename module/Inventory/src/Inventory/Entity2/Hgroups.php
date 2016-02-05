<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hgroups
 *
 * @ORM\Table(name="hgroups", indexes={@ORM\Index(name="IDX_649A452F47405208", columns={"GROUPID"})})
 * @ORM\Entity
 */
class Hgroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="CONNECTTYPE", type="float", precision=10, scale=0, nullable=true)
     */
    private $connecttype;

    /**
     * @var string
     *
     * @ORM\Column(name="CONNECTVALUE", type="string", length=40, nullable=true)
     */
    private $connectvalue;

    /**
     * @var float
     *
     * @ORM\Column(name="SPEED", type="float", precision=10, scale=0, nullable=true)
     */
    private $speed;

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
     * @ORM\Column(name="BLOCKACTIVE", type="float", precision=10, scale=0, nullable=true)
     */
    private $blockactive;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCKCOUNT", type="float", precision=10, scale=0, nullable=true)
     */
    private $blockcount;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCKMIN", type="float", precision=10, scale=0, nullable=true)
     */
    private $blockmin;

    /**
     * @var float
     *
     * @ORM\Column(name="ORDER_ID", type="float", precision=10, scale=0, nullable=false)
     */
    private $orderId;

    /**
     * @var float
     *
     * @ORM\Column(name="READTIMEOUT", type="float", precision=10, scale=0, nullable=false)
     */
    private $readtimeout;

    /**
     * @var float
     *
     * @ORM\Column(name="IOTIMEQUOTA", type="float", precision=10, scale=0, nullable=false)
     */
    private $iotimequota;

    /**
     * @var float
     *
     * @ORM\Column(name="REMOTE_PORT", type="float", precision=10, scale=0, nullable=false)
     */
    private $remotePort;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIORITY", type="float", precision=10, scale=0, nullable=false)
     */
    private $priority;

    /**
     * @var float
     *
     * @ORM\Column(name="READINTERVALTIMEOUT", type="float", precision=10, scale=0, nullable=false)
     */
    private $readintervaltimeout;

    /**
     * @var float
     *
     * @ORM\Column(name="READTOTALTIMEOUTMULTIPLIER", type="float", precision=10, scale=0, nullable=false)
     */
    private $readtotaltimeoutmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="READTOTALTIMEOUTCONSTANT", type="float", precision=10, scale=0, nullable=false)
     */
    private $readtotaltimeoutconstant;

    /**
     * @var float
     *
     * @ORM\Column(name="WRITETOTALTIMEOUTMULTIPLIER", type="float", precision=10, scale=0, nullable=false)
     */
    private $writetotaltimeoutmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="WRITETOTALTIMEOUTCONSTANT", type="float", precision=10, scale=0, nullable=false)
     */
    private $writetotaltimeoutconstant;

    /**
     * @var float
     *
     * @ORM\Column(name="LOCAL_PORT", type="float", precision=10, scale=0, nullable=true)
     */
    private $localPort;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTION_BEFORE_LOCK", type="string", length=500, nullable=true)
     */
    private $actionBeforeLock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdwhen", type="datetime", nullable=true)
     */
    private $createdwhen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiedby", type="datetime", nullable=true)
     */
    private $modifiedby;

    /**
     * @var \Inventory\Entity2\Hgroups
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Hgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GROUPID", referencedColumnName="ID")
     * })
     */
    private $groupid;


}
