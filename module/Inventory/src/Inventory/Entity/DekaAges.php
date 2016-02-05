<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;

/**
 * DekaAges
 *
 * @ORM\Table(name="deka_ages")
 * @ORM\Entity
 * @Annotation\Name("deka_ages")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class DekaAges extends DekaBasic
{
    /**
     * @var \Inventory\Entity\DekaAges
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity\DekaAges")
     * @ORM\JoinColumn(name="parentid", referencedColumnName="id", nullable=true)
     * @Annotation\Exclude()
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="begindate", type="bigint", nullable=true)
     */
    private $begindate;

    /**
     * @var integer
     *
     * @ORM\Column(name="enddate", type="bigint", nullable=true)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="eduweeks", type="smallint", nullable=true)
     */
    private $eduweeks;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="previousid", type="bigint", nullable=true)
     */
    private $previousid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="schdays", type="integer", nullable=false)
     */
    private $schdays;

    /**
     * @var string
     *
     * @ORM\Column(name="schedudays", type="string", length=255, nullable=false)
     */
    private $schedudays;

    /**
     * @var integer
     *
     * @ORM\Column(name="schstartdaynum", type="integer", nullable=false)
     */
    private $schstartdaynum;

}
