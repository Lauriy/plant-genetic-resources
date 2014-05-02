<?php

namespace PGR\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessionAdditionalData
 *
 * @ORM\Table(name="accession_additional_data")
 * @ORM\Entity(repositoryClass="PGR\APIBundle\Entity\AccessionAdditionalDataRepository")
 */
class AccessionAdditionalData
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
     * @ORM\Column(name="accession_id", type="integer")
     */
    private $accessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=30)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="institute_id", type="integer")
     */
    private $instituteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="preferred_identifier", type="integer")
     */
    private $preferredIdentifier;


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
     * Set accessionId
     *
     * @param integer $accessionId
     * @return AccessionAdditionalData
     */
    public function setAccessionId($accessionId)
    {
        $this->accessionId = $accessionId;

        return $this;
    }

    /**
     * Get accessionId
     *
     * @return integer
     */
    public function getAccessionId()
    {
        return $this->accessionId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return AccessionAdditionalData
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AccessionAdditionalData
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set instituteId
     *
     * @param integer $instituteId
     * @return AccessionAdditionalData
     */
    public function setInstituteId($instituteId)
    {
        $this->instituteId = $instituteId;

        return $this;
    }

    /**
     * Get instituteId
     *
     * @return integer
     */
    public function getInstituteId()
    {
        return $this->instituteId;
    }

    /**
     * Set preferredIdentifier
     *
     * @param integer $preferredIdentifier
     * @return AccessionAdditionalData
     */
    public function setPreferredIdentifier($preferredIdentifier)
    {
        $this->preferredIdentifier = $preferredIdentifier;

        return $this;
    }

    /**
     * Get preferredIdentifier
     *
     * @return integer
     */
    public function getPreferredIdentifier()
    {
        return $this->preferredIdentifier;
    }
}
