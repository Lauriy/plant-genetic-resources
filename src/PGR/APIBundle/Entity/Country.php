<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\CountryRepository")
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code_3", type="string", length=3)
     */
    private $code3;

    /**
     * @var string
     *
     * @ORM\Column(name="code_2", type="string", length=2, nullable=true)
     */
    private $code2;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=3, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="region_icarda", type="string", length=31, nullable=true)
     */
    private $regionIcarda;

    /**
     * @var string
     *
     * @ORM\Column(name="region_icarda_alt", type="string", length=31, nullable=true)
     */
    private $regionIcardaAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=3, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text", nullable=true)
     */
    private $remarks;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code3
     *
     * @param string $code3
     * @return Country
     */
    public function setCode3($code3)
    {
        $this->code3 = $code3;

        return $this;
    }

    /**
     * Get code3
     *
     * @return string
     */
    public function getCode3()
    {
        return $this->code3;
    }

    /**
     * Set code2
     *
     * @param string $code2
     * @return Country
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;

        return $this;
    }

    /**
     * Get code2
     *
     * @return string
     */
    public function getCode2()
    {
        return $this->code2;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Country
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set regionIcarda
     *
     * @param string $regionIcarda
     * @return Country
     */
    public function setRegionIcarda($regionIcarda)
    {
        $this->regionIcarda = $regionIcarda;

        return $this;
    }

    /**
     * Get regionIcarda
     *
     * @return string
     */
    public function getRegionIcarda()
    {
        return $this->regionIcarda;
    }

    /**
     * Set regionIcardaAlt
     *
     * @param string $regionIcardaAlt
     * @return Country
     */
    public function setRegionIcardaAlt($regionIcardaAlt)
    {
        $this->regionIcardaAlt = $regionIcardaAlt;

        return $this;
    }

    /**
     * Get regionIcardaAlt
     *
     * @return string
     */
    public function getRegionIcardaAlt()
    {
        return $this->regionIcardaAlt;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Country
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Country
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
}
