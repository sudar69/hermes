<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="IDX_BFDD316828D797FE", columns={"artc_parent_id"}), @ORM\Index(name="IDX_BFDD3168D7077436", columns={"lng_id"}), @ORM\Index(name="IDX_BFDD3168A5BA57E2", columns={"rs_id"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="artc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artcId;

    /**
     * @var string
     *
     * @ORM\Column(name="artc_title", type="string", length=100, nullable=false)
     */
    private $artcTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="artc_slug", type="string", length=100, nullable=false)
     */
    private $artcSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="artc_introtext", type="text", nullable=true)
     */
    private $artcIntrotext;

    /**
     * @var string
     *
     * @ORM\Column(name="artc_fulltext", type="text", nullable=true)
     */
    private $artcFulltext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="artc_created", type="datetime", nullable=true)
     */
    private $artcCreated;

    /**
     * @var \Inventory\Entity2\Articles
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artc_parent_id", referencedColumnName="artc_id")
     * })
     */
    private $artcParent;

    /**
     * @var \Inventory\Entity2\Resources
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Resources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rs_id", referencedColumnName="rs_id")
     * })
     */
    private $rs;

    /**
     * @var \Inventory\Entity2\Languages
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lng_id", referencedColumnName="lng_id")
     * })
     */
    private $lng;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Inventory\Entity2\Categories", inversedBy="artc")
     * @ORM\JoinTable(name="articles_categories",
     *   joinColumns={
     *     @ORM\JoinColumn(name="artc_id", referencedColumnName="artc_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctgr_id", referencedColumnName="ctgr_id")
     *   }
     * )
     */
    private $ctgr;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctgr = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
