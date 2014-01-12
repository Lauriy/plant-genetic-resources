<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxonchange
 */
class Taxonchange
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $taxonOld;

    /**
     * @var string
     */
    private $taxonNew;

    /**
     * @var string
     */
    private $idDate;

    /**
     * @var string
     */
    private $idPerson;


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
     * Set taxonOld
     *
     * @param string $taxonOld
     * @return Taxonchange
     */
    public function setTaxonOld($taxonOld)
    {
        $this->taxonOld = $taxonOld;

        return $this;
    }

    /**
     * Get taxonOld
     *
     * @return string 
     */
    public function getTaxonOld()
    {
        return $this->taxonOld;
    }

    /**
     * Set taxonNew
     *
     * @param string $taxonNew
     * @return Taxonchange
     */
    public function setTaxonNew($taxonNew)
    {
        $this->taxonNew = $taxonNew;

        return $this;
    }

    /**
     * Get taxonNew
     *
     * @return string 
     */
    public function getTaxonNew()
    {
        return $this->taxonNew;
    }

    /**
     * Set idDate
     *
     * @param string $idDate
     * @return Taxonchange
     */
    public function setIdDate($idDate)
    {
        $this->idDate = $idDate;

        return $this;
    }

    /**
     * Get idDate
     *
     * @return string 
     */
    public function getIdDate()
    {
        return $this->idDate;
    }

    /**
     * Set idPerson
     *
     * @param string $idPerson
     * @return Taxonchange
     */
    public function setIdPerson($idPerson)
    {
        $this->idPerson = $idPerson;

        return $this;
    }

    /**
     * Get idPerson
     *
     * @return string 
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }
}
