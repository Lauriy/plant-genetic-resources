<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 */
class Stock
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var integer
     */
    private $aWgt;

    /**
     * @var integer
     */
    private $aSeed;

    /**
     * @var \DateTime
     */
    private $aYear;

    /**
     * @var string
     */
    private $aLocat;

    /**
     * @var string
     */
    private $aDflag;

    /**
     * @var integer
     */
    private $aVt;

    /**
     * @var string
     */
    private $aVtdate;

    /**
     * @var integer
     */
    private $s1000;

    /**
     * @var integer
     */
    private $s100;

    /**
     * @var string
     */
    private $bLocat;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $duplsite;

    /**
     * @var string
     */
    private $storage;

    /**
     * @var string
     */
    private $vYear;

    /**
     * @var string
     */
    private $vSite;

    /**
     * @var string
     */
    private $vLocation;

    /**
     * @var \DateTime
     */
    private $iDate;

    /**
     * @var string
     */
    private $iSite;

    /**
     * @var string
     */
    private $iLocation;

    /**
     * @var integer
     */
    private $nc2;

    /**
     * @var integer
     */
    private $mousture;


    /**
     * Get nc
     *
     * @return integer 
     */
    public function getNc()
    {
        return $this->nc;
    }

    /**
     * Set aWgt
     *
     * @param integer $aWgt
     * @return Stock
     */
    public function setAWgt($aWgt)
    {
        $this->aWgt = $aWgt;

        return $this;
    }

    /**
     * Get aWgt
     *
     * @return integer 
     */
    public function getAWgt()
    {
        return $this->aWgt;
    }

    /**
     * Set aSeed
     *
     * @param integer $aSeed
     * @return Stock
     */
    public function setASeed($aSeed)
    {
        $this->aSeed = $aSeed;

        return $this;
    }

    /**
     * Get aSeed
     *
     * @return integer 
     */
    public function getASeed()
    {
        return $this->aSeed;
    }

    /**
     * Set aYear
     *
     * @param \DateTime $aYear
     * @return Stock
     */
    public function setAYear($aYear)
    {
        $this->aYear = $aYear;

        return $this;
    }

    /**
     * Get aYear
     *
     * @return \DateTime 
     */
    public function getAYear()
    {
        return $this->aYear;
    }

    /**
     * Set aLocat
     *
     * @param string $aLocat
     * @return Stock
     */
    public function setALocat($aLocat)
    {
        $this->aLocat = $aLocat;

        return $this;
    }

    /**
     * Get aLocat
     *
     * @return string 
     */
    public function getALocat()
    {
        return $this->aLocat;
    }

    /**
     * Set aDflag
     *
     * @param string $aDflag
     * @return Stock
     */
    public function setADflag($aDflag)
    {
        $this->aDflag = $aDflag;

        return $this;
    }

    /**
     * Get aDflag
     *
     * @return string 
     */
    public function getADflag()
    {
        return $this->aDflag;
    }

    /**
     * Set aVt
     *
     * @param integer $aVt
     * @return Stock
     */
    public function setAVt($aVt)
    {
        $this->aVt = $aVt;

        return $this;
    }

    /**
     * Get aVt
     *
     * @return integer 
     */
    public function getAVt()
    {
        return $this->aVt;
    }

    /**
     * Set aVtdate
     *
     * @param string $aVtdate
     * @return Stock
     */
    public function setAVtdate($aVtdate)
    {
        $this->aVtdate = $aVtdate;

        return $this;
    }

    /**
     * Get aVtdate
     *
     * @return string 
     */
    public function getAVtdate()
    {
        return $this->aVtdate;
    }

    /**
     * Set s1000
     *
     * @param integer $s1000
     * @return Stock
     */
    public function setS1000($s1000)
    {
        $this->s1000 = $s1000;

        return $this;
    }

    /**
     * Get s1000
     *
     * @return integer 
     */
    public function getS1000()
    {
        return $this->s1000;
    }

    /**
     * Set s100
     *
     * @param integer $s100
     * @return Stock
     */
    public function setS100($s100)
    {
        $this->s100 = $s100;

        return $this;
    }

    /**
     * Get s100
     *
     * @return integer 
     */
    public function getS100()
    {
        return $this->s100;
    }

    /**
     * Set bLocat
     *
     * @param string $bLocat
     * @return Stock
     */
    public function setBLocat($bLocat)
    {
        $this->bLocat = $bLocat;

        return $this;
    }

    /**
     * Get bLocat
     *
     * @return string 
     */
    public function getBLocat()
    {
        return $this->bLocat;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Stock
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set duplsite
     *
     * @param string $duplsite
     * @return Stock
     */
    public function setDuplsite($duplsite)
    {
        $this->duplsite = $duplsite;

        return $this;
    }

    /**
     * Get duplsite
     *
     * @return string 
     */
    public function getDuplsite()
    {
        return $this->duplsite;
    }

    /**
     * Set storage
     *
     * @param string $storage
     * @return Stock
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return string 
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set vYear
     *
     * @param string $vYear
     * @return Stock
     */
    public function setVYear($vYear)
    {
        $this->vYear = $vYear;

        return $this;
    }

    /**
     * Get vYear
     *
     * @return string 
     */
    public function getVYear()
    {
        return $this->vYear;
    }

    /**
     * Set vSite
     *
     * @param string $vSite
     * @return Stock
     */
    public function setVSite($vSite)
    {
        $this->vSite = $vSite;

        return $this;
    }

    /**
     * Get vSite
     *
     * @return string 
     */
    public function getVSite()
    {
        return $this->vSite;
    }

    /**
     * Set vLocation
     *
     * @param string $vLocation
     * @return Stock
     */
    public function setVLocation($vLocation)
    {
        $this->vLocation = $vLocation;

        return $this;
    }

    /**
     * Get vLocation
     *
     * @return string 
     */
    public function getVLocation()
    {
        return $this->vLocation;
    }

    /**
     * Set iDate
     *
     * @param \DateTime $iDate
     * @return Stock
     */
    public function setIDate($iDate)
    {
        $this->iDate = $iDate;

        return $this;
    }

    /**
     * Get iDate
     *
     * @return \DateTime 
     */
    public function getIDate()
    {
        return $this->iDate;
    }

    /**
     * Set iSite
     *
     * @param string $iSite
     * @return Stock
     */
    public function setISite($iSite)
    {
        $this->iSite = $iSite;

        return $this;
    }

    /**
     * Get iSite
     *
     * @return string 
     */
    public function getISite()
    {
        return $this->iSite;
    }

    /**
     * Set iLocation
     *
     * @param string $iLocation
     * @return Stock
     */
    public function setILocation($iLocation)
    {
        $this->iLocation = $iLocation;

        return $this;
    }

    /**
     * Get iLocation
     *
     * @return string 
     */
    public function getILocation()
    {
        return $this->iLocation;
    }

    /**
     * Set nc2
     *
     * @param integer $nc2
     * @return Stock
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

    /**
     * Set mousture
     *
     * @param integer $mousture
     * @return Stock
     */
    public function setMousture($mousture)
    {
        $this->mousture = $mousture;

        return $this;
    }

    /**
     * Get mousture
     *
     * @return integer 
     */
    public function getMousture()
    {
        return $this->mousture;
    }
}
