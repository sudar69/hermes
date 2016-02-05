<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="IDX_5F9E962AD7077436", columns={"lng_id"}), @ORM\Index(name="IDX_5F9E962A4A863625", columns={"artc_id"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="com_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comId;

    /**
     * @var string
     *
     * @ORM\Column(name="com_title", type="string", length=100, nullable=false)
     */
    private $comTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="com_text", type="text", nullable=true)
     */
    private $comText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="com_created", type="datetime", nullable=true)
     */
    private $comCreated;

    /**
     * @var \Inventory\Entity2\Articles
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artc_id", referencedColumnName="artc_id")
     * })
     */
    private $artc;

    /**
     * @var \Inventory\Entity2\Languages
     *
     * @ORM\ManyToOne(targetEntity="Inventory\Entity2\Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lng_id", referencedColumnName="lng_id")
     * })
     */
    private $lng;


}
