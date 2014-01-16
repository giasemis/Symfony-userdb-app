<?php
// src/User/DataBundle/Entity/Userinfo.php

namespace User\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */

class User
{

 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
     * @ORM\Column(type="string")
     */
	 
    protected $username;
	
	/**
     * @ORM\Column(type="datetime")
     */

    protected $RegistrationDate;

    
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set RegistrationDate
     *
     * @param \DateTime $registrationDate
     * @return User
     */
    public function setRegistrationDate($RegistrationDate)
    {
        $this->RegistrationDate = $RegistrationDate;

        return $this;
    }

    /**
     * Get RegistrationDate
     *
     * @return \DateTime 
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
}
