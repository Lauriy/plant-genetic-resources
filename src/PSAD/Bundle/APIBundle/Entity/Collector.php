<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collector
 */
class Collector
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $ccode;

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
     * Set ccode
     *
     * @param string $ccode
     * @return Collector
     */
    public function setCcode($ccode)
    {
        $this->ccode = $ccode;

        return $this;
    }

    /**
     * Get ccode
     *
     * @return string 
     */
    public function getCcode()
    {
        return $this->ccode;
    }

    /**
     * Set nc2
     *
     * @param integer $nc2
     * @return Collector
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
