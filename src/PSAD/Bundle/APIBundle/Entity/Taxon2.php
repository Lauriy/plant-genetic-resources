<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxon2
 */
class Taxon2
{
    /**
     * @var integer
     */
    private $taxno2;

    /**
     * @var string
     */
    private $taxName;

    /**
     * @var string
     */
    private $taxAuthor;

    /**
     * @var string
     */
    private $family;

    /**
     * @var string
     */
    private $genus;

    /**
     * @var string
     */
    private $gauthor;

    /**
     * @var string
     */
    private $species;

    /**
     * @var string
     */
    private $sauthor;

    /**
     * @var string
     */
    private $subtaxa;

    /**
     * @var string
     */
    private $subAuthor;

    /**
     * @var string
     */
    private $longevity;

    /**
     * @var integer
     */
    private $chromosome;

    /**
     * @var integer
     */
    private $staxno;

    /**
     * @var integer
     */
    private $annex1;

    /**
     * @var string
     */
    private $cropEng;

    /**
     * @var string
     */
    private $cropRus;

    /**
     * @var integer
     */
    private $cereals;

    /**
     * @var integer
     */
    private $foodleg;

    /**
     * @var integer
     */
    private $forage;

    /**
     * @var integer
     */
    private $vegetables;

    /**
     * @var integer
     */
    private $industrial;

    /**
     * @var integer
     */
    private $fruits;

    /**
     * @var integer
     */
    private $medicinal;

    /**
     * @var integer
     */
    private $other;

    /**
     * @var string
     */
    private $pic1addres;

    /**
     * @var string
     */
    private $pic1desc;

    /**
     * @var string
     */
    private $pic2addres;

    /**
     * @var string
     */
    private $pic2desc;

    /**
     * @var integer
     */
    private $icataxno;


    /**
     * Get taxno2
     *
     * @return integer 
     */
    public function getTaxno2()
    {
        return $this->taxno2;
    }

    /**
     * Set taxName
     *
     * @param string $taxName
     * @return Taxon2
     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;

        return $this;
    }

    /**
     * Get taxName
     *
     * @return string 
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * Set taxAuthor
     *
     * @param string $taxAuthor
     * @return Taxon2
     */
    public function setTaxAuthor($taxAuthor)
    {
        $this->taxAuthor = $taxAuthor;

        return $this;
    }

    /**
     * Get taxAuthor
     *
     * @return string 
     */
    public function getTaxAuthor()
    {
        return $this->taxAuthor;
    }

    /**
     * Set family
     *
     * @param string $family
     * @return Taxon2
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string 
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set genus
     *
     * @param string $genus
     * @return Taxon2
     */
    public function setGenus($genus)
    {
        $this->genus = $genus;

        return $this;
    }

    /**
     * Get genus
     *
     * @return string 
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * Set gauthor
     *
     * @param string $gauthor
     * @return Taxon2
     */
    public function setGauthor($gauthor)
    {
        $this->gauthor = $gauthor;

        return $this;
    }

    /**
     * Get gauthor
     *
     * @return string 
     */
    public function getGauthor()
    {
        return $this->gauthor;
    }

    /**
     * Set species
     *
     * @param string $species
     * @return Taxon2
     */
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return string 
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set sauthor
     *
     * @param string $sauthor
     * @return Taxon2
     */
    public function setSauthor($sauthor)
    {
        $this->sauthor = $sauthor;

        return $this;
    }

    /**
     * Get sauthor
     *
     * @return string 
     */
    public function getSauthor()
    {
        return $this->sauthor;
    }

    /**
     * Set subtaxa
     *
     * @param string $subtaxa
     * @return Taxon2
     */
    public function setSubtaxa($subtaxa)
    {
        $this->subtaxa = $subtaxa;

        return $this;
    }

    /**
     * Get subtaxa
     *
     * @return string 
     */
    public function getSubtaxa()
    {
        return $this->subtaxa;
    }

    /**
     * Set subAuthor
     *
     * @param string $subAuthor
     * @return Taxon2
     */
    public function setSubAuthor($subAuthor)
    {
        $this->subAuthor = $subAuthor;

        return $this;
    }

    /**
     * Get subAuthor
     *
     * @return string 
     */
    public function getSubAuthor()
    {
        return $this->subAuthor;
    }

    /**
     * Set longevity
     *
     * @param string $longevity
     * @return Taxon2
     */
    public function setLongevity($longevity)
    {
        $this->longevity = $longevity;

        return $this;
    }

    /**
     * Get longevity
     *
     * @return string 
     */
    public function getLongevity()
    {
        return $this->longevity;
    }

    /**
     * Set chromosome
     *
     * @param integer $chromosome
     * @return Taxon2
     */
    public function setChromosome($chromosome)
    {
        $this->chromosome = $chromosome;

        return $this;
    }

    /**
     * Get chromosome
     *
     * @return integer 
     */
    public function getChromosome()
    {
        return $this->chromosome;
    }

    /**
     * Set staxno
     *
     * @param integer $staxno
     * @return Taxon2
     */
    public function setStaxno($staxno)
    {
        $this->staxno = $staxno;

        return $this;
    }

    /**
     * Get staxno
     *
     * @return integer 
     */
    public function getStaxno()
    {
        return $this->staxno;
    }

    /**
     * Set annex1
     *
     * @param integer $annex1
     * @return Taxon2
     */
    public function setAnnex1($annex1)
    {
        $this->annex1 = $annex1;

        return $this;
    }

    /**
     * Get annex1
     *
     * @return integer 
     */
    public function getAnnex1()
    {
        return $this->annex1;
    }

    /**
     * Set cropEng
     *
     * @param string $cropEng
     * @return Taxon2
     */
    public function setCropEng($cropEng)
    {
        $this->cropEng = $cropEng;

        return $this;
    }

    /**
     * Get cropEng
     *
     * @return string 
     */
    public function getCropEng()
    {
        return $this->cropEng;
    }

    /**
     * Set cropRus
     *
     * @param string $cropRus
     * @return Taxon2
     */
    public function setCropRus($cropRus)
    {
        $this->cropRus = $cropRus;

        return $this;
    }

    /**
     * Get cropRus
     *
     * @return string 
     */
    public function getCropRus()
    {
        return $this->cropRus;
    }

    /**
     * Set cereals
     *
     * @param integer $cereals
     * @return Taxon2
     */
    public function setCereals($cereals)
    {
        $this->cereals = $cereals;

        return $this;
    }

    /**
     * Get cereals
     *
     * @return integer 
     */
    public function getCereals()
    {
        return $this->cereals;
    }

    /**
     * Set foodleg
     *
     * @param integer $foodleg
     * @return Taxon2
     */
    public function setFoodleg($foodleg)
    {
        $this->foodleg = $foodleg;

        return $this;
    }

    /**
     * Get foodleg
     *
     * @return integer 
     */
    public function getFoodleg()
    {
        return $this->foodleg;
    }

    /**
     * Set forage
     *
     * @param integer $forage
     * @return Taxon2
     */
    public function setForage($forage)
    {
        $this->forage = $forage;

        return $this;
    }

    /**
     * Get forage
     *
     * @return integer 
     */
    public function getForage()
    {
        return $this->forage;
    }

    /**
     * Set vegetables
     *
     * @param integer $vegetables
     * @return Taxon2
     */
    public function setVegetables($vegetables)
    {
        $this->vegetables = $vegetables;

        return $this;
    }

    /**
     * Get vegetables
     *
     * @return integer 
     */
    public function getVegetables()
    {
        return $this->vegetables;
    }

    /**
     * Set industrial
     *
     * @param integer $industrial
     * @return Taxon2
     */
    public function setIndustrial($industrial)
    {
        $this->industrial = $industrial;

        return $this;
    }

    /**
     * Get industrial
     *
     * @return integer 
     */
    public function getIndustrial()
    {
        return $this->industrial;
    }

    /**
     * Set fruits
     *
     * @param integer $fruits
     * @return Taxon2
     */
    public function setFruits($fruits)
    {
        $this->fruits = $fruits;

        return $this;
    }

    /**
     * Get fruits
     *
     * @return integer 
     */
    public function getFruits()
    {
        return $this->fruits;
    }

    /**
     * Set medicinal
     *
     * @param integer $medicinal
     * @return Taxon2
     */
    public function setMedicinal($medicinal)
    {
        $this->medicinal = $medicinal;

        return $this;
    }

    /**
     * Get medicinal
     *
     * @return integer 
     */
    public function getMedicinal()
    {
        return $this->medicinal;
    }

    /**
     * Set other
     *
     * @param integer $other
     * @return Taxon2
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return integer 
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set pic1addres
     *
     * @param string $pic1addres
     * @return Taxon2
     */
    public function setPic1addres($pic1addres)
    {
        $this->pic1addres = $pic1addres;

        return $this;
    }

    /**
     * Get pic1addres
     *
     * @return string 
     */
    public function getPic1addres()
    {
        return $this->pic1addres;
    }

    /**
     * Set pic1desc
     *
     * @param string $pic1desc
     * @return Taxon2
     */
    public function setPic1desc($pic1desc)
    {
        $this->pic1desc = $pic1desc;

        return $this;
    }

    /**
     * Get pic1desc
     *
     * @return string 
     */
    public function getPic1desc()
    {
        return $this->pic1desc;
    }

    /**
     * Set pic2addres
     *
     * @param string $pic2addres
     * @return Taxon2
     */
    public function setPic2addres($pic2addres)
    {
        $this->pic2addres = $pic2addres;

        return $this;
    }

    /**
     * Get pic2addres
     *
     * @return string 
     */
    public function getPic2addres()
    {
        return $this->pic2addres;
    }

    /**
     * Set pic2desc
     *
     * @param string $pic2desc
     * @return Taxon2
     */
    public function setPic2desc($pic2desc)
    {
        $this->pic2desc = $pic2desc;

        return $this;
    }

    /**
     * Get pic2desc
     *
     * @return string 
     */
    public function getPic2desc()
    {
        return $this->pic2desc;
    }

    /**
     * Set icataxno
     *
     * @param integer $icataxno
     * @return Taxon2
     */
    public function setIcataxno($icataxno)
    {
        $this->icataxno = $icataxno;

        return $this;
    }

    /**
     * Get icataxno
     *
     * @return integer 
     */
    public function getIcataxno()
    {
        return $this->icataxno;
    }
}
