<?php

namespace Mc\SettingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avatar
 *
 * @ORM\Table(name="avatar")
 * @ORM\Entity
 */
class Avatar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer")
     * @ORM\Id
     */
    private $userId;
    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255)
     */
    private $avatar;

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Avatar
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
