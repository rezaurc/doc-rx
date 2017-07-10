<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prescription
 *
 * @ORM\Table(name="prescription")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrescriptionRepository")
 */
class Prescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEdited", type="datetime")
     */
    private $dateEdited;

    /**
     * @var string
     *
     * @ORM\Column(name="FollowUp", type="string")
     */
    private $followUp;

    /**
     * @var string
     *
     * @ORM\Column(name="Complain", type="string")
     */
    private $complain;

    /**
     * @var string
     *
     * @ORM\Column(name="Finding", type="string")
     */
    private $finding;

    /**
     * @var integer
     *
     * @ORM\Column(name="PatientId", type="integer")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Patient")
     */
    private $patientId;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Prescription
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateEdited
     *
     * @param \DateTime $dateEdited
     *
     * @return Prescription
     */
    public function setDateEdited($dateEdited)
    {
        $this->dateEdited = $dateEdited;

        return $this;
    }

    /**
     * Get dateEdited
     *
     * @return \DateTime
     */
    public function getDateEdited()
    {
        return $this->dateEdited;
    }

    /**
     * @return mixed
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * @param mixed $followUp
     */
    public function setFollowUp($followUp)
    {
        $this->followUp = $followUp;
    }

    /**
     * @return string
     */
    public function getComplain()
    {
        return $this->complain;
    }

    /**
     * @param string $complain
     */
    public function setComplain($complain)
    {
        $this->complain = $complain;
    }

    /**
     * @return string
     */
    public function getFinding()
    {
        return $this->finding;
    }

    /**
     * @param string $finding
     */
    public function setFinding($finding)
    {
        $this->finding = $finding;
    }

    /**
     * @return int
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * @param int $patientId
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;
    }

}
