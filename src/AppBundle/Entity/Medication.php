<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Medication
 *
 * @ORM\Table(name="medication")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MedicationRepository")
 */
class Medication
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prescription")
     */
    private $prescription;

    /**
     * @var string
     *
     * @ORM\Column(name="GenaricName", type="string", length=255, nullable=true)
     */
    private $genaricName;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandName", type="string", length=255)
     */
    private $brandName;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var array
     *
     * @ORM\Column(name="doses", type="array")
     */
    private $doses;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="Instruction", type="string", length=255, nullable=true)
     */
    private $instruction;

    /**
     * Medication constructor.
     *
     */
    public function __construct()
    {
        $this->prescription = new ArrayCollection();
    }


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
     * Set genaricName
     *
     * @param string $genaricName
     *
     * @return Medication
     */
    public function setGenaricName($genaricName)
    {
        $this->genaricName = $genaricName;

        return $this;
    }

    /**
     * Get genaricName
     *
     * @return string
     */
    public function getGenaricName()
    {
        return $this->genaricName;
    }

    /**
     * Set brandName
     *
     * @param string $brandName
     *
     * @return Medication
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Medication
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
     * Set doses
     *
     * @param array $doses
     *
     * @return Medication
     */
    public function setDoses($doses)
    {
        $this->doses = $doses;

        return $this;
    }

    /**
     * Get doses
     *
     * @return array
     */
    public function getDoses()
    {
        return $this->doses;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Medication
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set instruction
     *
     * @param string $instruction
     *
     * @return Medication
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Get instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * @return int
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    public function setPrescription(Prescription $prescription = null)
    {
        $this->prescription = $prescription;
    }
    /**
     * @param \AppBundle\Entity\Prescription $prescription
     *
     * @since 1.0.0
     */
    public function addPrescription(Prescription $prescription)
    {
        $this->prescription = $prescription;
    }
}

