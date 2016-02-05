<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_57698A6AB8C2FD88", columns={"roleId"})}, indexes={@ORM\Index(name="IDX_57698A6A727ACA70", columns={"parent_id"})})
 * @ORM\Entity
 */
class Role
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
     * @ORM\Column(name="roleId", type="string", length=255, nullable=true)
     */
    private $roleid;

    /**
     * @var \Inventory\Entity2\Role
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Inventory\Entity2\Users", mappedBy="role")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
