<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hdevices
 *
 * @ORM\Table(name="hdevices", indexes={@ORM\Index(name="IDX_EA47F58347405208", columns={"GROUPID"})})
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
     * @var \Inventory\Entity2\Hgroups
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Hgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GROUPID", referencedColumnName="ID")
     * })
     */
    private $groupid;


}
