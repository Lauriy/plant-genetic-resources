<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="accessions")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\AccessionRepository")
 */
class Accession
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="crop_name_id", type="integer")
     */
    private $cropNameId;

    /**
     * @ORM\Column(name="taxon_id", type="integer")
     */
    private $taxonId;

    /**
     * @ORM\Column(name="planting_season_id", type="integer")
     */
    private $plantingSeasonId;

    /**
     * @ORM\Column(name="population_type_id", type="integer")
     */
    private $populationTypeId;

    /**
     * @ORM\Column(name="status_id", type="integer")
     */
    private $statusId;

    /**
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @ORM\Column(name="collection_site_id", type="integer")
     */
    private $collectionSiteId;

    /**
     * @ORM\Column(name="collection_code", type="string", length=200)
     */
    private $collectionCode;

    /**
     * @ORM\Column(name="collection_date", type="date")
     */
    private $collectionDate;

    /**
     * @ORM\Column(name="donor_country_id", type="integer")
     */
    private $donorCountryId;

    /**
     * @ORM\Column(name="conservation_institute_id", type="integer")
     */
    private $conservationInstituteId;

    /**
     * @ORM\Column(name="cooperator_id", type="integer")
     */
    private $cooperatorId;

    /**
     * @ORM\Column(name="recording_date", type="date")
     */
    private $recordingDate;

    /**
     * @ORM\Column(name="herbarium_status_id", type="integer")
     */
    private $herbariumStatusId;

    /**
     * @ORM\Column(name="conservation_status_id", type="integer")
     */
    private $conservationStatusId;

    /**
     * @ORM\Column(name="habitat_id", type="integer")
     */
    private $habitatId;

    /**
     * @ORM\Column(name="sample_area_id", type="integer")
     */
    private $sampleAreaId;

    /**
     * @ORM\Column(name="irrigation_id", type="integer")
     */
    private $irrigationId;

    /**
     * @ORM\Column(name="threshing_status_id", type="integer")
     */
    private $threshingStatusId;

    /**
     * @ORM\Column(name="breeder_id", type="integer")
     */
    private $breederId;

    /**
     * @ORM\Column(name="pedigree_id", type="integer")
     */
    private $pedigreeId;

    public function getId()
    {
        return $this->id;
    }

    public function setCropNameId($cropNameId)
    {
        $this->cropNameId = $cropNameId;

        return $this;
    }

    public function getCropNameId()
    {
        return $this->cropNameId;
    }

    public function setTaxonId($taxonId)
    {
        $this->taxonId = $taxonId;

        return $this;
    }

    public function getTaxonId()
    {
        return $this->taxonId;
    }

    public function setPlantingSeasonId($plantingSeasonId)
    {
        $this->plantingSeasonId = $plantingSeasonId;

        return $this;
    }

    public function getPlantingSeasonId()
    {
        return $this->plantingSeasonId;
    }

    public function setPopulationTypeId($populationTypeId)
    {
        $this->populationTypeId = $populationTypeId;

        return $this;
    }

    public function getPopulationTypeId()
    {
        return $this->populationTypeId;
    }

    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    public function getStatusId()
    {
        return $this->statusId;
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

    public function setCollectionSiteId($collectionSiteId)
    {
        $this->collectionSiteId = $collectionSiteId;

        return $this;
    }

    public function getCollectionSiteId()
    {
        return $this->collectionSiteId;
    }

    public function setCollectionCode($collectionCode)
    {
        $this->collectionCode = $collectionCode;

        return $this;
    }

    public function getCollectionCode()
    {
        return $this->collectionCode;
    }

    public function setCollectionDate($collectionDate)
    {
        $this->collectionDate = $collectionDate;

        return $this;
    }

    public function getCollectionDate()
    {
        return $this->collectionDate;
    }

    public function setDonorCountryId($donorCountryId)
    {
        $this->donorCountryId = $donorCountryId;

        return $this;
    }

    public function getDonorCountryId()
    {
        return $this->donorCountryId;
    }

    public function setConservationInstituteId($conservationInstituteId)
    {
        $this->conservationInstituteId = $conservationInstituteId;

        return $this;
    }

    public function getConservationInstituteId()
    {
        return $this->conservationInstituteId;
    }

    public function setCooperatorId($cooperatorId)
    {
        $this->cooperatorId = $cooperatorId;

        return $this;
    }

    public function getCooperatorId()
    {
        return $this->cooperatorId;
    }

    public function setRecordingDate($recordingDate)
    {
        $this->recordingDate = $recordingDate;

        return $this;
    }

    public function getRecordingDate()
    {
        return $this->recordingDate;
    }

    public function setHerbariumStatusId($herbariumStatusId)
    {
        $this->herbariumStatusId = $herbariumStatusId;

        return $this;
    }

    public function getHerbariumStatusId()
    {
        return $this->herbariumStatusId;
    }

    public function setConservationStatusId($conservationStatusId)
    {
        $this->conservationStatusId = $conservationStatusId;

        return $this;
    }

    public function getConservationStatusId()
    {
        return $this->conservationStatusId;
    }

    public function setHabitatId($habitatId)
    {
        $this->habitatId = $habitatId;

        return $this;
    }

    public function getHabitatId()
    {
        return $this->habitatId;
    }

    public function setSampleAreaId($sampleAreaId)
    {
        $this->sampleAreaId = $sampleAreaId;

        return $this;
    }

    public function getSampleAreaId()
    {
        return $this->sampleAreaId;
    }

    public function setIrrigationId($irrigationId)
    {
        $this->irrigationId = $irrigationId;

        return $this;
    }

    public function getIrrigationId()
    {
        return $this->irrigationId;
    }

    public function setThreshingStatusId($threshingStatusId)
    {
        $this->threshingStatusId = $threshingStatusId;

        return $this;
    }

    public function getThreshingStatusId()
    {
        return $this->threshingStatusId;
    }

    public function setBreederId($breederId)
    {
        $this->breederId = $breederId;

        return $this;
    }

    public function getBreederId()
    {
        return $this->breederId;
    }

    public function setPedigreeId($pedigreeId)
    {
        $this->pedigreeId = $pedigreeId;

        return $this;
    }

    public function getPedigreeId()
    {
        return $this->pedigreeId;
    }
}