<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRole
 *
 * @ORM\Table(name="user_role")
 * @ORM\Entity
 */
class UserRole
{
    /**
     * @var string
     *
     * @ORM\Column(name="role_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault;

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=255, nullable=true)
     */
    private $parent;


}
