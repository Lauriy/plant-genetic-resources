<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accession
 */
class Accession
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $crop;

    /**
     * @var integer
     */
    private $taxno;

    /**
     * @var string
     */
    private $sW;

    /**
     * @var string
     */
    private $popType;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $ori;

    /**
     * @var string
     */
    private $siteCode;

    /**
     * @var string
     */
    private $collNo;

    /**
     * @var string
     */
    private $collectiond;

    /**
     * @var string
     */
    private $donorCty;

    /**
     * @var string
     */
    private $insCons;

    /**
     * @var string
     */
    private $donor;

    /**
     * @var string
     */
    private $recDate;

    /**
     * @var string
     */
    private $herbSpec;

    /**
     * @var string
     */
    private $conStat;

    /**
     * @var integer
     */
    private $newnc;

    /**
     * @var string
     */
    private $habitat;

    /**
     * @var string
     */
    private $areSamp;

    /**
     * @var string
     */
    private $noPlants;

    /**
     * @var string
     */
    private $iD;

    /**
     * @var string
     */
    private $tU;

    /**
     * @var integer
     */
    private $aCode;

    /**
     * @var integer
     */
    private $nc2;

    /**
     * @var integer
     */
    private $genbank;


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
     * Set crop
     *
     * @param string $crop
     * @return Accession
     */
    public function setCrop($crop)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * Get crop
     *
     * @return string 
     */
    public function getCrop()
    {
        return $this->crop;
    }

    /**
     * Set taxno
     *
     * @param integer $taxno
     * @return Accession
     */
    public function setTaxno($taxno)
    {
        $this->taxno = $taxno;

        return $this;
    }

    /**
     * Get taxno
     *
     * @return integer 
     */
    public function getTaxno()
    {
        return $this->taxno;
    }

    /**
     * Set sW
     *
     * @param string $sW
     * @return Accession
     */
    public function setSW($sW)
    {
        $this->sW = $sW;

        return $this;
    }

    /**
     * Get sW
     *
     * @return string 
     */
    public function getSW()
    {
        return $this->sW;
    }

    /**
     * Set popType
     *
     * @param string $popType
     * @return Accession
     */
    public function setPopType($popType)
    {
        $this->popType = $popType;

        return $this;
    }

    /**
     * Get popType
     *
     * @return string 
     */
    public function getPopType()
    {
        return $this->popType;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Accession
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set ori
     *
     * @param string $ori
     * @return Accession
     */
    public function setOri($ori)
    {
        $this->ori = $ori;

        return $this;
    }

    /**
     * Get ori
     *
     * @return string 
     */
    public function getOri()
    {
        return $this->ori;
    }

    /**
     * Set siteCode
     *
     * @param string $siteCode
     * @return Accession
     */
    public function setSiteCode($siteCode)
    {
        $this->siteCode = $siteCode;

        return $this;
    }

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
     * Set collNo
     *
     * @param string $collNo
     * @return Accession
     */
    public function setCollNo($collNo)
    {
        $this->collNo = $collNo;

        return $this;
    }

    /**
     * Get collNo
     *
     * @return string 
     */
    public function getCollNo()
    {
        return $this->collNo;
    }

    /**
     * Set collectiond
     *
     * @param string $collectiond
     * @return Accession
     */
    public function setCollectiond($collectiond)
    {
        $this->collectiond = $collectiond;

        return $this;
    }

    /**
     * Get collectiond
     *
     * @return string 
     */
    public function getCollectiond()
    {
        return $this->collectiond;
    }

    /**
     * Set donorCty
     *
     * @param string $donorCty
     * @return Accession
     */
    public function setDonorCty($donorCty)
    {
        $this->donorCty = $donorCty;

        return $this;
    }

    /**
     * Get donorCty
     *
     * @return string 
     */
    public function getDonorCty()
    {
        return $this->donorCty;
    }

    /**
     * Set insCons
     *
     * @param string $insCons
     * @return Accession
     */
    public function setInsCons($insCons)
    {
        $this->insCons = $insCons;

        return $this;
    }

    /**
     * Get insCons
     *
     * @return string 
     */
    public function getInsCons()
    {
        return $this->insCons;
    }

    /**
     * Set donor
     *
     * @param string $donor
     * @return Accession
     */
    public function setDonor($donor)
    {
        $this->donor = $donor;

        return $this;
    }

    /**
     * Get donor
     *
     * @return string 
     */
    public function getDonor()
    {
        return $this->donor;
    }

    /**
     * Set recDate
     *
     * @param string $recDate
     * @return Accession
     */
    public function setRecDate($recDate)
    {
        $this->recDate = $recDate;

        return $this;
    }

    /**
     * Get recDate
     *
     * @return string 
     */
    public function getRecDate()
    {
        return $this->recDate;
    }

    /**
     * Set herbSpec
     *
     * @param string $herbSpec
     * @return Accession
     */
    public function setHerbSpec($herbSpec)
    {
        $this->herbSpec = $herbSpec;

        return $this;
    }

    /**
     * Get herbSpec
     *
     * @return string 
     */
    public function getHerbSpec()
    {
        return $this->herbSpec;
    }

    /**
     * Set conStat
     *
     * @param string $conStat
     * @return Accession
     */
    public function setConStat($conStat)
    {
        $this->conStat = $conStat;

        return $this;
    }

    /**
     * Get conStat
     *
     * @return string 
     */
    public function getConStat()
    {
        return $this->conStat;
    }

    /**
     * Set newnc
     *
     * @param integer $newnc
     * @return Accession
     */
    public function setNewnc($newnc)
    {
        $this->newnc = $newnc;

        return $this;
    }

    /**
     * Get newnc
     *
     * @return integer 
     */
    public function getNewnc()
    {
        return $this->newnc;
    }

    /**
     * Set habitat
     *
     * @param string $habitat
     * @return Accession
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return string 
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    /**
     * Set areSamp
     *
     * @param string $areSamp
     * @return Accession
     */
    public function setAreSamp($areSamp)
    {
        $this->areSamp = $areSamp;

        return $this;
    }

    /**
     * Get areSamp
     *
     * @return string 
     */
    public function getAreSamp()
    {
        return $this->areSamp;
    }

    /**
     * Set noPlants
     *
     * @param string $noPlants
     * @return Accession
     */
    public function setNoPlants($noPlants)
    {
        $this->noPlants = $noPlants;

        return $this;
    }

    /**
     * Get noPlants
     *
     * @return string 
     */
    public function getNoPlants()
    {
        return $this->noPlants;
    }

    /**
     * Set iD
     *
     * @param string $iD
     * @return Accession
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Get iD
     *
     * @return string 
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Set tU
     *
     * @param string $tU
     * @return Accession
     */
    public function setTU($tU)
    {
        $this->tU = $tU;

        return $this;
    }

    /**
     * Get tU
     *
     * @return string 
     */
    public function getTU()
    {
        return $this->tU;
    }

    /**
     * Set aCode
     *
     * @param integer $aCode
     * @return Accession
     */
    public function setACode($aCode)
    {
        $this->aCode = $aCode;

        return $this;
    }

    /**
     * Get aCode
     *
     * @return integer 
     */
    public function getACode()
    {
        return $this->aCode;
    }

    /**
     * Set nc2
     *
     * @param integer $nc2
     * @return Accession
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
     * Set genbank
     *
     * @param integer $genbank
     * @return Accession
     */
    public function setGenbank($genbank)
    {
        $this->genbank = $genbank;

        return $this;
    }

    /**
     * Get genbank
     *
     * @return integer 
     */
    public function getGenbank()
    {
        return $this->genbank;
    }
}
