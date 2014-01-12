<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedigree
 */
class Pedigree
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $devyear;

    /**
     * @var string
     */
    private $relyear;

    /**
     * @var string
     */
    private $developer;

    /**
     * @var string
     */
    private $pedigree;

    /**
     * @var string
     */
    private $remarks;

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
     * Set devyear
     *
     * @param string $devyear
     * @return Pedigree
     */
    public function setDevyear($devyear)
    {
        $this->devyear = $devyear;

        return $this;
    }

    /**
     * Get devyear
     *
     * @return string 
     */
    public function getDevyear()
    {
        return $this->devyear;
    }

    /**
     * Set relyear
     *
     * @param string $relyear
     * @return Pedigree
     */
    public function setRelyear($relyear)
    {
        $this->relyear = $relyear;

        return $this;
    }

    /**
     * Get relyear
     *
     * @return string 
     */
    public function getRelyear()
    {
        return $this->relyear;
    }

    /**
     * Set developer
     *
     * @param string $developer
     * @return Pedigree
     */
    public function setDeveloper($developer)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return string 
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * Set pedigree
     *
     * @param string $pedigree
     * @return Pedigree
     */
    public function setPedigree($pedigree)
    {
        $this->pedigree = $pedigree;

        return $this;
    }

    /**
     * Get pedigree
     *
     * @return string 
     */
    public function getPedigree()
    {
        return $this->pedigree;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Pedigree
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
     * Set nc2
     *
     * @param integer $nc2
     * @return Pedigree
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
