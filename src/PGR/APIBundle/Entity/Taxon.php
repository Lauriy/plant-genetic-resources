<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Taxon
 *
 * @ORM\Table(name="taxa")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\TaxonRepository")
 */
class Taxon
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
     * @Gedmo\Translatable
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxon_author_id", type="integer")
     */
    private $taxonAuthorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="family_id", type="integer")
     */
    private $familyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="genus_id", type="integer")
     */
    private $genusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="genus_author_id", type="integer")
     */
    private $genusAuthorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="species_id", type="integer")
     */
    private $speciesId;

    /**
     * @var integer
     *
     * @ORM\Column(name="species_author_id", type="integer")
     */
    private $speciesAuthorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="subtaxon_id", type="integer")
     */
    private $subtaxonId;

    /**
     * @var integer
     *
     * @ORM\Column(name="subtaxon_author_id", type="integer")
     */
    private $subtaxonAuthorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="longevity_type_id", type="integer")
     */
    private $longevityTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="chromosomes", type="smallint")
     */
    private $chromosomes;

    /**
     * @var integer
     *
     * @ORM\Column(name="icarda_taxon_id", type="integer")
     */
    private $icardaTaxonId;

    /**
     * @Gedmo\Locale
     */
    private $locale;

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
     * Set name
     *
     * @param string $name
     * @return Taxon
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
     * Set taxonAuthorId
     *
     * @param integer $taxonAuthorId
     * @return Taxon
     */
    public function setTaxonAuthorId($taxonAuthorId)
    {
        $this->taxonAuthorId = $taxonAuthorId;

        return $this;
    }

    /**
     * Get taxonAuthorId
     *
     * @return integer
     */
    public function getTaxonAuthorId()
    {
        return $this->taxonAuthorId;
    }

    /**
     * Set familyId
     *
     * @param integer $familyId
     * @return Taxon
     */
    public function setFamilyId($familyId)
    {
        $this->familyId = $familyId;

        return $this;
    }

    /**
     * Get familyId
     *
     * @return integer
     */
    public function getFamilyId()
    {
        return $this->familyId;
    }

    /**
     * Set genusId
     *
     * @param integer $genusId
     * @return Taxon
     */
    public function setGenusId($genusId)
    {
        $this->genusId = $genusId;

        return $this;
    }

    /**
     * Get genusId
     *
     * @return integer
     */
    public function getGenusId()
    {
        return $this->genusId;
    }

    /**
     * Set genusAuthorId
     *
     * @param integer $genusAuthorId
     * @return Taxon
     */
    public function setGenusAuthorId($genusAuthorId)
    {
        $this->genusAuthorId = $genusAuthorId;

        return $this;
    }

    /**
     * Get genusAuthorId
     *
     * @return integer
     */
    public function getGenusAuthorId()
    {
        return $this->genusAuthorId;
    }

    /**
     * Set speciesId
     *
     * @param integer $speciesId
     * @return Taxon
     */
    public function setSpeciesId($speciesId)
    {
        $this->speciesId = $speciesId;

        return $this;
    }

    /**
     * Get speciesId
     *
     * @return integer
     */
    public function getSpeciesId()
    {
        return $this->speciesId;
    }

    /**
     * Set speciesAuthorId
     *
     * @param integer $speciesAuthorId
     * @return Taxon
     */
    public function setSpeciesAuthorId($speciesAuthorId)
    {
        $this->speciesAuthorId = $speciesAuthorId;

        return $this;
    }

    /**
     * Get speciesAuthorId
     *
     * @return integer
     */
    public function getSpeciesAuthorId()
    {
        return $this->speciesAuthorId;
    }

    /**
     * Set subtaxonId
     *
     * @param integer $subtaxonId
     * @return Taxon
     */
    public function setSubtaxonId($subtaxonId)
    {
        $this->subtaxonId = $subtaxonId;

        return $this;
    }

    /**
     * Get subtaxonId
     *
     * @return integer
     */
    public function getSubtaxonId()
    {
        return $this->subtaxonId;
    }

    /**
     * Set subtaxonAuthorId
     *
     * @param integer $subtaxonAuthorId
     * @return Taxon
     */
    public function setSubtaxonAuthorId($subtaxonAuthorId)
    {
        $this->subtaxonAuthorId = $subtaxonAuthorId;

        return $this;
    }

    /**
     * Get subtaxonAuthorId
     *
     * @return integer
     */
    public function getSubtaxonAuthorId()
    {
        return $this->subtaxonAuthorId;
    }

    /**
     * Set longevityTypeId
     *
     * @param integer $longevityTypeId
     * @return Taxon
     */
    public function setLongevityTypeId($longevityTypeId)
    {
        $this->longevityTypeId = $longevityTypeId;

        return $this;
    }

    /**
     * Get longevityTypeId
     *
     * @return integer
     */
    public function getLongevityTypeId()
    {
        return $this->longevityTypeId;
    }

    /**
     * Set chromosomes
     *
     * @param integer $chromosomes
     * @return Taxon
     */
    public function setChromosomes($chromosomes)
    {
        $this->chromosomes = $chromosomes;

        return $this;
    }

    /**
     * Get chromosomes
     *
     * @return integer
     */
    public function getChromosomes()
    {
        return $this->chromosomes;
    }

    /**
     * Set icardaTaxonId
     *
     * @param integer $icardaTaxonId
     * @return Taxon
     */
    public function setIcardaTaxonId($icardaTaxonId)
    {
        $this->icardaTaxonId = $icardaTaxonId;

        return $this;
    }

    /**
     * Get icardaTaxonId
     *
     * @return integer
     */
    public function getIcardaTaxonId()
    {
        return $this->icardaTaxonId;
    }

    /**
     * Set Gedmo locale
     *
     * @param string $locale
     * @return Taxon
     */
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
}
