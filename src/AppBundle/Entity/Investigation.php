<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Investigation
 *
 * @ORM\Table(name="investigation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvestigationRepository")
 */
class Investigation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="PrescriptionId", type="integer")
     */
    private $prescriptionId;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;


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
     * Set prescriptionId
     *
     * @param integer $prescriptionId
     *
     * @return Investigation
     */
    public function setPrescriptionId($prescriptionId)
    {
        $this->prescriptionId = $prescriptionId;

        return $this;
    }

    /**
     * Get prescriptionId
     *
     * @return int
     */
    public function getPrescriptionId()
    {
        return $this->prescriptionId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Investigation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

