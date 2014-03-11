<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedigree
 *
 * @ORM\Table(name="pedigrees")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\PedigreeRepository")
 */
class Pedigree
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
     * @var integer
     *
     * @ORM\Column(name="cooperator_id", type="integer")
     */
    private $cooperatorId;

    /**
     * @var string
     *
     * @ORM\Column(name="pedigree", type="string", length=255)
     */
    private $pedigree;


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
     * Set cooperatorId
     *
     * @param integer $cooperatorId
     * @return Pedigree
     */
    public function setCooperatorId($cooperatorId)
    {
        $this->cooperatorId = $cooperatorId;

        return $this;
    }

    /**
     * Get cooperatorId
     *
     * @return integer
     */
    public function getCooperatorId()
    {
        return $this->cooperatorId;
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
}
