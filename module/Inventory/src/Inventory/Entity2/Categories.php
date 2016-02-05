<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctgr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctgrId;

    /**
     * @var string
     *
     * @ORM\Column(name="ctgr_name", type="string", length=100, nullable=false)
     */
    private $ctgrName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Inventory\Entity2\Articles", mappedBy="ctgr")
     */
    private $artc;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artc = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
