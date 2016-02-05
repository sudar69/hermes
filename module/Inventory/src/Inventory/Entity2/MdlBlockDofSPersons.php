<?php

namespace Inventory\Entity2;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlBlockDofSPersons
 *
 * @ORM\Table(name="mdl_block_dof_s_persons", indexes={@ORM\Index(name="mdl_blocdofspers_lasfirmid_ix", columns={"lastname", "firstname", "middlename"}), @ORM\Index(name="mdl_blocdofspers_fir_ix", columns={"firstname"}), @ORM\Index(name="mdl_blocdofspers_dat_ix", columns={"dateofbirth"}), @ORM\Index(name="mdl_blocdofspers_ema_ix", columns={"email"}), @ORM\Index(name="mdl_blocdofspers_ema2_ix", columns={"emailadd1"}), @ORM\Index(name="mdl_blocdofspers_ema3_ix", columns={"emailadd2"}), @ORM\Index(name="mdl_blocdofspers_ema4_ix", columns={"emailadd3"}), @ORM\Index(name="mdl_blocdofspers_sky_ix", columns={"skype"}), @ORM\Index(name="mdl_blocdofspers_mdl_ix", columns={"mdluser"}), @ORM\Index(name="mdl_blocdofspers_syn_ix", columns={"sync2moodle"}), @ORM\Index(name="mdl_blocdofspers_pas_ix", columns={"passportnum"}), @ORM\Index(name="mdl_blocdofspers_cit_ix", columns={"citizenship"}), @ORM\Index(name="mdl_blocdofspers_sta_ix", columns={"status"}), @ORM\Index(name="mdl_blocdofspers_add_ix", columns={"adddate"}), @ORM\Index(name="mdl_blocdofspers_bir_ix", columns={"birthaddressid"}), @ORM\Index(name="mdl_blocdofspers_dep_ix", columns={"departmentid"})})
 * @ORM\Entity
 */
class MdlBlockDofSPersons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="middlename", type="string", length=100, nullable=true)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="sortname", type="string", length=100, nullable=true)
     */
    private $sortname;

    /**
     * @var string
     *
     * @ORM\Column(name="preferredname", type="string", length=100, nullable=true)
     */
    private $preferredname;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateofbirth", type="bigint", nullable=true)
     */
    private $dateofbirth;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=100, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phonehome", type="string", length=20, nullable=true)
     */
    private $phonehome;

    /**
     * @var string
     *
     * @ORM\Column(name="phonework", type="string", length=20, nullable=true)
     */
    private $phonework;

    /**
     * @var string
     *
     * @ORM\Column(name="phonecell", type="string", length=20, nullable=true)
     */
    private $phonecell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="passtypeid", type="boolean", nullable=true)
     */
    private $passtypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="passportserial", type="string", length=20, nullable=true)
     */
    private $passportserial;

    /**
     * @var string
     *
     * @ORM\Column(name="passportnum", type="string", length=20, nullable=true)
     */
    private $passportnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="passportdate", type="bigint", nullable=true)
     */
    private $passportdate;

    /**
     * @var string
     *
     * @ORM\Column(name="passportem", type="string", length=255, nullable=true)
     */
    private $passportem;

    /**
     * @var string
     *
     * @ORM\Column(name="citizenship", type="string", length=5, nullable=true)
     */
    private $citizenship;

    /**
     * @var integer
     *
     * @ORM\Column(name="passportaddrid", type="bigint", nullable=true)
     */
    private $passportaddrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="mdluser", type="bigint", nullable=true)
     */
    private $mdluser;

    /**
     * @var string
     *
     * @ORM\Column(name="sync2moodle", type="string", length=10, nullable=false)
     */
    private $sync2moodle;

    /**
     * @var integer
     *
     * @ORM\Column(name="addressid", type="bigint", nullable=true)
     */
    private $addressid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="adddate", type="bigint", nullable=true)
     */
    private $adddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="birthaddressid", type="bigint", nullable=true)
     */
    private $birthaddressid;

    /**
     * @var integer
     *
     * @ORM\Column(name="departmentid", type="bigint", nullable=true)
     */
    private $departmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=true)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=32, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneadd1", type="string", length=20, nullable=true)
     */
    private $phoneadd1;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneadd2", type="string", length=20, nullable=true)
     */
    private $phoneadd2;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneadd3", type="string", length=20, nullable=true)
     */
    private $phoneadd3;

    /**
     * @var string
     *
     * @ORM\Column(name="emailadd1", type="string", length=100, nullable=true)
     */
    private $emailadd1;

    /**
     * @var string
     *
     * @ORM\Column(name="emailadd2", type="string", length=100, nullable=true)
     */
    private $emailadd2;

    /**
     * @var string
     *
     * @ORM\Column(name="emailadd3", type="string", length=100, nullable=true)
     */
    private $emailadd3;


}
