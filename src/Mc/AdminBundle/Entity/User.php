<?php
// src/Acme/UserBundle/Entity/User.php

namespace Mc\AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * 
    * @ORM\Column( type="string" , length=255 )
    *
    * @Assert\NotBlank(message="请填写你的名字" , groups={"Registration" , "Profile"})
    * @Assert\Length(min=1,max=255,minMessage="名字太短 至少有一个字",maxMessage="名字太长")
    **/
    protected $name;

    /**
    * 
    * @ORM\Column( type="string" , length=255 )
    *
    * @Assert\NotBlank(message="请填写你的工作" , groups={"Registration" , "Profile"})
    * @Assert\Length(min=1,max=255,minMessage="工作名太短",maxMessage="工作名太长")
    **/
    protected $job;

    /**
    * 
    * @ORM\Column( type="integer")
    *
    * @Assert\NotBlank(message="请填写你的名字" , groups={"Registration" , "Profile"})
    * @Assert\Length(min=1,max=18,minMessage="QQ号太短",maxMessage="QQ号太长")
    **/
    protected $qq;


    public function __construct()
    {
        parent::__construct();
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName( $name)
    {
        $this->name = $name;
        return $this;
    }
    public function getJob()
    {
        return $this->job;
    }
    public function setJob( $job)
    {   
        $this->job = $job;
        return $this;
    }
    public function getQq()
    {
        return $this->qq;
    }
    public function setQq( $qq)
    {
        $this->qq = $qq;
        return $this;
    }
}