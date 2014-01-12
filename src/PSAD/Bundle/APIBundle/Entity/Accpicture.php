<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accpicture
 */
class Accpicture
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $picaddress;

    /**
     * @var string
     */
    private $picdesc;


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
     * Set picaddress
     *
     * @param string $picaddress
     * @return Accpicture
     */
    public function setPicaddress($picaddress)
    {
        $this->picaddress = $picaddress;

        return $this;
    }

    /**
     * Get picaddress
     *
     * @return string 
     */
    public function getPicaddress()
    {
        return $this->picaddress;
    }

    /**
     * Set picdesc
     *
     * @param string $picdesc
     * @return Accpicture
     */
    public function setPicdesc($picdesc)
    {
        $this->picdesc = $picdesc;

        return $this;
    }

    /**
     * Get picdesc
     *
     * @return string 
     */
    public function getPicdesc()
    {
        return $this->picdesc;
    }
}
