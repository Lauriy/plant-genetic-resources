<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Breeder
 */
class Breeder
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $breedcode;


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
     * Set breedcode
     *
     * @param string $breedcode
     * @return Breeder
     */
    public function setBreedcode($breedcode)
    {
        $this->breedcode = $breedcode;

        return $this;
    }

    /**
     * Get breedcode
     *
     * @return string 
     */
    public function getBreedcode()
    {
        return $this->breedcode;
    }
}
