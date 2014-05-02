<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="cooperators")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\CooperatorRepository")
 */
class Cooperator
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="code", type="string", length=31)
     */
    private $code;

    /**
     * @ORM\Column(name="code_alt", type="string", length=31, nullable=true)
     */
    private $codeAlt;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    public function getId()
    {
        return $this->id;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCodeAlt($codeAlt)
    {
        $this->codeAlt = $codeAlt;

        return $this;
    }

    public function getCodeAlt()
    {
        return $this->codeAlt;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getCountryId()
    {
        return $this->countryId;
    }
}