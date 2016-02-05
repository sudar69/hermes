<?php

namespace Inventory\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * deka_departments
 *
 * @ORM\Table(name="deka_status_list")
 * @ORM\Entity
 * @Annotation\Name("deka_status_list")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ClassMethods")
 */
class DekaStatus extends DekaBasic
{

}
