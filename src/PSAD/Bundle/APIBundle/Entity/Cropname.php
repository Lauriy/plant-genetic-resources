<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cropname
 */
class Cropname
{
    /**
     * @var integer
     */
    private $taxno2;

    /**
     * @var string
     */
    private $commonname;

    /**
     * @var string
     */
    private $comment;


    /**
     * Get taxno2
     *
     * @return integer 
     */
    public function getTaxno2()
    {
        return $this->taxno2;
    }

    /**
     * Set commonname
     *
     * @param string $commonname
     * @return Cropname
     */
    public function setCommonname($commonname)
    {
        $this->commonname = $commonname;

        return $this;
    }

    /**
     * Get commonname
     *
     * @return string 
     */
    public function getCommonname()
    {
        return $this->commonname;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Cropname
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
