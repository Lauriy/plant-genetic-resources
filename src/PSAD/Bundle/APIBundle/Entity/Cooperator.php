<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cooperator
 */
class Cooperator
{
    /**
     * @var string
     */
    private $ccode;

    /**
     * @var string
     */
    private $insCode;

    /**
     * @var string
     */
    private $iname;

    /**
     * @var string
     */
    private $fname;

    /**
     * @var string
     */
    private $org;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $cty;


    /**
     * Get ccode
     *
     * @return string 
     */
    public function getCcode()
    {
        return $this->ccode;
    }

    /**
     * Set insCode
     *
     * @param string $insCode
     * @return Cooperator
     */
    public function setInsCode($insCode)
    {
        $this->insCode = $insCode;

        return $this;
    }

    /**
     * Get insCode
     *
     * @return string 
     */
    public function getInsCode()
    {
        return $this->insCode;
    }

    /**
     * Set iname
     *
     * @param string $iname
     * @return Cooperator
     */
    public function setIname($iname)
    {
        $this->iname = $iname;

        return $this;
    }

    /**
     * Get iname
     *
     * @return string 
     */
    public function getIname()
    {
        return $this->iname;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return Cooperator
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set org
     *
     * @param string $org
     * @return Cooperator
     */
    public function setOrg($org)
    {
        $this->org = $org;

        return $this;
    }

    /**
     * Get org
     *
     * @return string 
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Cooperator
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cty
     *
     * @param string $cty
     * @return Cooperator
     */
    public function setCty($cty)
    {
        $this->cty = $cty;

        return $this;
    }

    /**
     * Get cty
     *
     * @return string 
     */
    public function getCty()
    {
        return $this->cty;
    }
}
