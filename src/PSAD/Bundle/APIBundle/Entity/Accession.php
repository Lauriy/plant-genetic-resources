<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accession
 *
 * @ORM\Table(name="accessions")
 * @ORM\Entity(repositoryClass="PSAD\Bundle\APIBundle\Entity\AbstractRepository")
 */
class Accession
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
     * @ORM\Column(name="crop_name", type="string", length=25)
     */
    private $cropName;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxon_id", type="integer")
     */
    private $taxonId;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="collection_site_id", type="integer")
     */
    private $collectionSiteId;

    /**
     * @var string
     *
     * @ORM\Column(name="habitat_code", type="string", length=2)
     */
    private $habitatCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="breeder_id", type="integer")
     */
    private $breederId;


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
     * Set cropName
     *
     * @param string $cropName
     * @return Accession
     */
    public function setCropName($cropName)
    {
        $this->cropName = $cropName;

        return $this;
    }

    /**
     * Get cropName
     *
     * @return string
     */
    public function getCropName()
    {
        return $this->cropName;
    }

    /**
     * Set taxonId
     *
     * @param integer $taxonId
     * @return Accession
     */
    public function setTaxonId($taxonId)
    {
        $this->taxonId = $taxonId;

        return $this;
    }

    /**
     * Get taxonId
     *
     * @return integer
     */
    public function getTaxonId()
    {
        return $this->taxonId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Accession
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set collectionSiteId
     *
     * @param integer $collectionSiteId
     * @return Accession
     */
    public function setCollectionSiteId($collectionSiteId)
    {
        $this->collectionSiteId = $collectionSiteId;

        return $this;
    }

    /**
     * Get collectionSiteId
     *
     * @return integer
     */
    public function getCollectionSiteId()
    {
        return $this->collectionSiteId;
    }

    /**
     * Set habitatCode
     *
     * @param string $habitatCode
     * @return Accession
     */
    public function setHabitatCode($habitatCode)
    {
        $this->habitatCode = $habitatCode;

        return $this;
    }

    /**
     * Get habitatCode
     *
     * @return string
     */
    public function getHabitatCode()
    {
        return $this->habitatCode;
    }

    /**
     * Set breederId
     *
     * @param integer $breederId
     * @return Accession
     */
    public function setBreederId($breederId)
    {
        $this->breederId = $breederId;

        return $this;
    }

    /**
     * Get breederId
     *
     * @return integer
     */
    public function getBreederId()
    {
        return $this->breederId;
    }
}
