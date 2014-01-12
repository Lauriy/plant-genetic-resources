<?php

namespace PSAD\Bundle\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IdNumb
 */
class IdNumb
{
    /**
     * @var integer
     */
    private $nc;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $what;

    /**
     * @var string
     */
    private $dest;

    /**
     * @var string
     */
    private $pref;

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
     * Set id
     *
     * @param string $id
     * @return IdNumb
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set what
     *
     * @param string $what
     * @return IdNumb
     */
    public function setWhat($what)
    {
        $this->what = $what;

        return $this;
    }

    /**
     * Get what
     *
     * @return string 
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Set dest
     *
     * @param string $dest
     * @return IdNumb
     */
    public function setDest($dest)
    {
        $this->dest = $dest;

        return $this;
    }

    /**
     * Get dest
     *
     * @return string 
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     * Set pref
     *
     * @param string $pref
     * @return IdNumb
     */
    public function setPref($pref)
    {
        $this->pref = $pref;

        return $this;
    }

    /**
     * Get pref
     *
     * @return string 
     */
    public function getPref()
    {
        return $this->pref;
    }

    /**
     * Set nc2
     *
     * @param integer $nc2
     * @return IdNumb
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
