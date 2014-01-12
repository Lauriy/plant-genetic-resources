<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colsite
 */
class Colsite
{
    /**
     * @var string
     */
    private $siteCode;

    /**
     * @var string
     */
    private $colCode;

    /**
     * @var string
     */
    private $siteNo;

    /**
     * @var string
     */
    private $cty;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $lon;

    /**
     * @var string
     */
    private $lat;

    /**
     * @var string
     */
    private $lonDd;

    /**
     * @var string
     */
    private $lanDd;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var string
     */
    private $rainfall;

    /**
     * @var string
     */
    private $slope;

    /**
     * @var string
     */
    private $aspect;

    /**
     * @var string
     */
    private $parentrock;

    /**
     * @var string
     */
    private $slText;

    /**
     * @var string
     */
    private $slDepth;

    /**
     * @var string
     */
    private $slPh;

    /**
     * @var string
     */
    private $slPhVal;

    /**
     * @var string
     */
    private $slSal;

    /**
     * @var string
     */
    private $slHcl;

    /**
     * @var string
     */
    private $wrel;

    /**
     * @var string
     */
    private $domiSp;

    /**
     * @var string
     */
    private $charSp;

    /**
     * @var string
     */
    private $sitenotes;

    /**
     * @var integer
     */
    private $nc2;


    /**
     * Get siteCode
     *
     * @return string 
     */
    public function getSiteCode()
    {
        return $this->siteCode;
    }

    /**
     * Set colCode
     *
     * @param string $colCode
     * @return Colsite
     */
    public function setColCode($colCode)
    {
        $this->colCode = $colCode;

        return $this;
    }

    /**
     * Get colCode
     *
     * @return string 
     */
    public function getColCode()
    {
        return $this->colCode;
    }

    /**
     * Set siteNo
     *
     * @param string $siteNo
     * @return Colsite
     */
    public function setSiteNo($siteNo)
    {
        $this->siteNo = $siteNo;

        return $this;
    }

    /**
     * Get siteNo
     *
     * @return string 
     */
    public function getSiteNo()
    {
        return $this->siteNo;
    }

    /**
     * Set cty
     *
     * @param string $cty
     * @return Colsite
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

    /**
     * Set province
     *
     * @param string $province
     * @return Colsite
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Colsite
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set lon
     *
     * @param string $lon
     * @return Colsite
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Colsite
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lonDd
     *
     * @param string $lonDd
     * @return Colsite
     */
    public function setLonDd($lonDd)
    {
        $this->lonDd = $lonDd;

        return $this;
    }

    /**
     * Get lonDd
     *
     * @return string 
     */
    public function getLonDd()
    {
        return $this->lonDd;
    }

    /**
     * Set lanDd
     *
     * @param string $lanDd
     * @return Colsite
     */
    public function setLanDd($lanDd)
    {
        $this->lanDd = $lanDd;

        return $this;
    }

    /**
     * Get lanDd
     *
     * @return string 
     */
    public function getLanDd()
    {
        return $this->lanDd;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Colsite
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set rainfall
     *
     * @param string $rainfall
     * @return Colsite
     */
    public function setRainfall($rainfall)
    {
        $this->rainfall = $rainfall;

        return $this;
    }

    /**
     * Get rainfall
     *
     * @return string 
     */
    public function getRainfall()
    {
        return $this->rainfall;
    }

    /**
     * Set slope
     *
     * @param string $slope
     * @return Colsite
     */
    public function setSlope($slope)
    {
        $this->slope = $slope;

        return $this;
    }

    /**
     * Get slope
     *
     * @return string 
     */
    public function getSlope()
    {
        return $this->slope;
    }

    /**
     * Set aspect
     *
     * @param string $aspect
     * @return Colsite
     */
    public function setAspect($aspect)
    {
        $this->aspect = $aspect;

        return $this;
    }

    /**
     * Get aspect
     *
     * @return string 
     */
    public function getAspect()
    {
        return $this->aspect;
    }

    /**
     * Set parentrock
     *
     * @param string $parentrock
     * @return Colsite
     */
    public function setParentrock($parentrock)
    {
        $this->parentrock = $parentrock;

        return $this;
    }

    /**
     * Get parentrock
     *
     * @return string 
     */
    public function getParentrock()
    {
        return $this->parentrock;
    }

    /**
     * Set slText
     *
     * @param string $slText
     * @return Colsite
     */
    public function setSlText($slText)
    {
        $this->slText = $slText;

        return $this;
    }

    /**
     * Get slText
     *
     * @return string 
     */
    public function getSlText()
    {
        return $this->slText;
    }

    /**
     * Set slDepth
     *
     * @param string $slDepth
     * @return Colsite
     */
    public function setSlDepth($slDepth)
    {
        $this->slDepth = $slDepth;

        return $this;
    }

    /**
     * Get slDepth
     *
     * @return string 
     */
    public function getSlDepth()
    {
        return $this->slDepth;
    }

    /**
     * Set slPh
     *
     * @param string $slPh
     * @return Colsite
     */
    public function setSlPh($slPh)
    {
        $this->slPh = $slPh;

        return $this;
    }

    /**
     * Get slPh
     *
     * @return string 
     */
    public function getSlPh()
    {
        return $this->slPh;
    }

    /**
     * Set slPhVal
     *
     * @param string $slPhVal
     * @return Colsite
     */
    public function setSlPhVal($slPhVal)
    {
        $this->slPhVal = $slPhVal;

        return $this;
    }

    /**
     * Get slPhVal
     *
     * @return string 
     */
    public function getSlPhVal()
    {
        return $this->slPhVal;
    }

    /**
     * Set slSal
     *
     * @param string $slSal
     * @return Colsite
     */
    public function setSlSal($slSal)
    {
        $this->slSal = $slSal;

        return $this;
    }

    /**
     * Get slSal
     *
     * @return string 
     */
    public function getSlSal()
    {
        return $this->slSal;
    }

    /**
     * Set slHcl
     *
     * @param string $slHcl
     * @return Colsite
     */
    public function setSlHcl($slHcl)
    {
        $this->slHcl = $slHcl;

        return $this;
    }

    /**
     * Get slHcl
     *
     * @return string 
     */
    public function getSlHcl()
    {
        return $this->slHcl;
    }

    /**
     * Set wrel
     *
     * @param string $wrel
     * @return Colsite
     */
    public function setWrel($wrel)
    {
        $this->wrel = $wrel;

        return $this;
    }

    /**
     * Get wrel
     *
     * @return string 
     */
    public function getWrel()
    {
        return $this->wrel;
    }

    /**
     * Set domiSp
     *
     * @param string $domiSp
     * @return Colsite
     */
    public function setDomiSp($domiSp)
    {
        $this->domiSp = $domiSp;

        return $this;
    }

    /**
     * Get domiSp
     *
     * @return string 
     */
    public function getDomiSp()
    {
        return $this->domiSp;
    }

    /**
     * Set charSp
     *
     * @param string $charSp
     * @return Colsite
     */
    public function setCharSp($charSp)
    {
        $this->charSp = $charSp;

        return $this;
    }

    /**
     * Get charSp
     *
     * @return string 
     */
    public function getCharSp()
    {
        return $this->charSp;
    }

    /**
     * Set sitenotes
     *
     * @param string $sitenotes
     * @return Colsite
     */
    public function setSitenotes($sitenotes)
    {
        $this->sitenotes = $sitenotes;

        return $this;
    }

    /**
     * Get sitenotes
     *
     * @return string 
     */
    public function getSitenotes()
    {
        return $this->sitenotes;
    }

    /**
     * Set nc2
     *
     * @param integer $nc2
     * @return Colsite
     */
    public function setNc2($nc2)
    {
        $this->nc2 = $nc2;

        return $this;
    }

    /**
     * Get nc2
     *
     * @return integer 
     */
    public function getNc2()
    {
        return $this->nc2;
    }
}
