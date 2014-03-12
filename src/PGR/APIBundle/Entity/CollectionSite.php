<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectionSite
 *
 * @ORM\Table(name="collection_sites")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\CollectionSiteRepository")
 */
class CollectionSite
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="collection_code", type="string", length=255)
     */
    private $collectionCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="site_number", type="integer")
     */
    private $siteNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=255)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="decimal")
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="rainfall", type="decimal")
     */
    private $rainfall;

    /**
     * @var integer
     *
     * @ORM\Column(name="slope_type_id", type="integer")
     */
    private $slopeTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_rock_id", type="integer")
     */
    private $parentRockId;

    /**
     * @var integer
     *
     * @ORM\Column(name="soil_texture_id", type="integer")
     */
    private $soilTextureId;

    /**
     * @var integer
     *
     * @ORM\Column(name="soil_depth", type="integer")
     */
    private $soilDepth;

    /**
     * @var integer
     *
     * @ORM\Column(name="soil_ph", type="integer")
     */
    private $soilPh;

    /**
     * @var integer
     *
     * @ORM\Column(name="water_relation_id", type="integer")
     */
    private $waterRelationId;


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
     * Set code
     *
     * @param string $code
     * @return CollectionSite
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set collectionCode
     *
     * @param string $collectionCode
     * @return CollectionSite
     */
    public function setCollectionCode($collectionCode)
    {
        $this->collectionCode = $collectionCode;

        return $this;
    }

    /**
     * Get collectionCode
     *
     * @return string
     */
    public function getCollectionCode()
    {
        return $this->collectionCode;
    }

    /**
     * Set siteNumber
     *
     * @param integer $siteNumber
     * @return CollectionSite
     */
    public function setSiteNumber($siteNumber)
    {
        $this->siteNumber = $siteNumber;

        return $this;
    }

    /**
     * Get siteNumber
     *
     * @return integer
     */
    public function getSiteNumber()
    {
        return $this->siteNumber;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return CollectionSite
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
     * Set province
     *
     * @param string $province
     * @return CollectionSite
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
     * Set description
     *
     * @param string $description
     * @return CollectionSite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return CollectionSite
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
     * @return CollectionSite
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
     * Set slopeTypeId
     *
     * @param integer $slopeTypeId
     * @return CollectionSite
     */
    public function setSlopeTypeId($slopeTypeId)
    {
        $this->slopeTypeId = $slopeTypeId;

        return $this;
    }

    /**
     * Get slopeTypeId
     *
     * @return integer
     */
    public function getSlopeTypeId()
    {
        return $this->slopeTypeId;
    }

    /**
     * Set parentRockId
     *
     * @param integer $parentRockId
     * @return CollectionSite
     */
    public function setParentRockId($parentRockId)
    {
        $this->parentRockId = $parentRockId;

        return $this;
    }

    /**
     * Get parentRockId
     *
     * @return integer
     */
    public function getParentRockId()
    {
        return $this->parentRockId;
    }

    /**
     * Set soilTextureId
     *
     * @param integer $soilTextureId
     * @return CollectionSite
     */
    public function setSoilTextureId($soilTextureId)
    {
        $this->soilTextureId = $soilTextureId;

        return $this;
    }

    /**
     * Get soilTextureId
     *
     * @return integer
     */
    public function getSoilTextureId()
    {
        return $this->soilTextureId;
    }

    /**
     * Set soilDepth
     *
     * @param integer $soilDepth
     * @return CollectionSite
     */
    public function setSoilDepth($soilDepth)
    {
        $this->soilDepth = $soilDepth;

        return $this;
    }

    /**
     * Get soilDepth
     *
     * @return integer
     */
    public function getSoilDepth()
    {
        return $this->soilDepth;
    }

    /**
     * Set soilPh
     *
     * @param integer $soilPh
     * @return CollectionSite
     */
    public function setSoilPh($soilPh)
    {
        $this->soilPh = $soilPh;

        return $this;
    }

    /**
     * Get soilPh
     *
     * @return integer
     */
    public function getSoilPh()
    {
        return $this->soilPh;
    }

    /**
     * Set waterRelationId
     *
     * @param integer $waterRelationId
     * @return CollectionSite
     */
    public function setWaterRelationId($waterRelationId)
    {
        $this->waterRelationId = $waterRelationId;

        return $this;
    }

    /**
     * Get waterRelationId
     *
     * @return integer
     */
    public function getWaterRelationId()
    {
        return $this->waterRelationId;
    }
}
