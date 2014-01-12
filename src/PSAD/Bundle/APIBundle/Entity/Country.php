<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 */
class Country
{
    /**
     * @var string
     */
    private $cty;

    /**
     * @var string
     */
    private $cty2char;

    /**
     * @var string
     */
    private $ctynumcode;

    /**
     * @var string
     */
    private $ctyName;

    /**
     * @var string
     */
    private $ctyNameru;

    /**
     * @var string
     */
    private $regIcarda;

    /**
     * @var string
     */
    private $regIcard2;

    /**
     * @var string
     */
    private $regGeog;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var string
     */
    private $oldDesign;


    /**
     * Get cty
     *
     * @return string 
     */
    public function getCty()
    {
        return $this->cty;
    }

    /**
     * Set cty2char
     *
     * @param string $cty2char
     * @return Country
     */
    public function setCty2char($cty2char)
    {
        $this->cty2char = $cty2char;

        return $this;
    }

    /**
     * Get cty2char
     *
     * @return string 
     */
    public function getCty2char()
    {
        return $this->cty2char;
    }

    /**
     * Set ctynumcode
     *
     * @param string $ctynumcode
     * @return Country
     */
    public function setCtynumcode($ctynumcode)
    {
        $this->ctynumcode = $ctynumcode;

        return $this;
    }

    /**
     * Get ctynumcode
     *
     * @return string 
     */
    public function getCtynumcode()
    {
        return $this->ctynumcode;
    }

    /**
     * Set ctyName
     *
     * @param string $ctyName
     * @return Country
     */
    public function setCtyName($ctyName)
    {
        $this->ctyName = $ctyName;

        return $this;
    }

    /**
     * Get ctyName
     *
     * @return string 
     */
    public function getCtyName()
    {
        return $this->ctyName;
    }

    /**
     * Set ctyNameru
     *
     * @param string $ctyNameru
     * @return Country
     */
    public function setCtyNameru($ctyNameru)
    {
        $this->ctyNameru = $ctyNameru;

        return $this;
    }

    /**
     * Get ctyNameru
     *
     * @return string 
     */
    public function getCtyNameru()
    {
        return $this->ctyNameru;
    }

    /**
     * Set regIcarda
     *
     * @param string $regIcarda
     * @return Country
     */
    public function setRegIcarda($regIcarda)
    {
        $this->regIcarda = $regIcarda;

        return $this;
    }

    /**
     * Get regIcarda
     *
     * @return string 
     */
    public function getRegIcarda()
    {
        return $this->regIcarda;
    }

    /**
     * Set regIcard2
     *
     * @param string $regIcard2
     * @return Country
     */
    public function setRegIcard2($regIcard2)
    {
        $this->regIcard2 = $regIcard2;

        return $this;
    }

    /**
     * Get regIcard2
     *
     * @return string 
     */
    public function getRegIcard2()
    {
        return $this->regIcard2;
    }

    /**
     * Set regGeog
     *
     * @param string $regGeog
     * @return Country
     */
    public function setRegGeog($regGeog)
    {
        $this->regGeog = $regGeog;

        return $this;
    }

    /**
     * Get regGeog
     *
     * @return string 
     */
    public function getRegGeog()
    {
        return $this->regGeog;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Country
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
     * Set oldDesign
     *
     * @param string $oldDesign
     * @return Country
     */
    public function setOldDesign($oldDesign)
    {
        $this->oldDesign = $oldDesign;

        return $this;
    }

    /**
     * Get oldDesign
     *
     * @return string 
     */
    public function getOldDesign()
    {
        return $this->oldDesign;
    }
}
