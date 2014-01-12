<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 */
class Notes
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var string
     */
    private $taxonRem;

    /**
     * @var integer
     */
    private $nc2;


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
     * Set remarks
     *
     * @param string $remarks
     * @return Notes
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string 
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set taxonRem
     *
     * @param string $taxonRem
     * @return Notes
     */
    public function setTaxonRem($taxonRem)
    {
        $this->taxonRem = $taxonRem;

        return $this;
    }

    /**
     * Get taxonRem
     *
     * @return string 
     */
    public function getTaxonRem()
    {
        return $this->taxonRem;
    }

    /**
     * Set nc2
     *
     * @param integer $nc2
     * @return Notes
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
