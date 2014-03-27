<?php

namespace Mc\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unit
 *
 * @ORM\Table(name="unit")
 * @ORM\Entity
 */
class Unit
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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="outline", type="text")
     */
    private $outline;

    /**
     * @var string
     *
     * @ORM\Column(name="ppt", type="string", length=255)
     */
    private $ppt;

    /**
     * @var string
     *
     * @ORM\Column(name="playPath", type="string", length=255)
     */
    private $playPath;

    /**
     * @var string
     *
     * @ORM\Column(name="playFile", type="string", length=255)
     */
    private $playFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="programId", type="integer")
     */
    private $programId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;


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
     * Set subject
     *
     * @param string $subject
     * @return Unit
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set outline
     *
     * @param string $outline
     * @return Unit
     */
    public function setOutline($outline)
    {
        $this->outline = $outline;

        return $this;
    }

    /**
     * Get outline
     *
     * @return string 
     */
    public function getOutline()
    {
        return $this->outline;
    }

    /**
     * Set ppt
     *
     * @param string $ppt
     * @return Unit
     */
    public function setPpt($ppt)
    {
        $this->ppt = $ppt;

        return $this;
    }

    /**
     * Get ppt
     *
     * @return string 
     */
    public function getPpt()
    {
        return $this->ppt;
    }

    /**
     * Set playPath
     *
     * @param string $playPath
     * @return Unit
     */
    public function setPlayPath($playPath)
    {
        $this->playPath = $playPath;

        return $this;
    }

    /**
     * Get playPath
     *
     * @return string 
     */
    public function getPlayPath()
    {
        return $this->playPath;
    }

    /**
     * Set playFile
     *
     * @param string $playFile
     * @return Unit
     */
    public function setPlayFile($playFile)
    {
        $this->playFile = $playFile;

        return $this;
    }

    /**
     * Get playFile
     *
     * @return string 
     */
    public function getPlayFile()
    {
        return $this->playFile;
    }

    /**
     * Set programId
     *
     * @param integer $programId
     * @return Unit
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;

        return $this;
    }

    /**
     * Get programId
     *
     * @return integer 
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Unit
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
