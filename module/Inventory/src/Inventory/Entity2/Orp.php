<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orp
 *
 * @ORM\Table(name="orp", indexes={@ORM\Index(name="IDX_F1C63F4757698A6A", columns={"role"})})
 * @ORM\Entity
 */
class Orp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=255, nullable=false)
     */
    private $controller;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=false)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="isHidden", type="integer", nullable=false)
     */
    private $ishidden;

    /**
     * @var \Inventory\Entity2\Role
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role", referencedColumnName="id")
     * })
     */
    private $role;


}
