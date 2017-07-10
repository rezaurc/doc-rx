<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocPatientRelationships
 *
 * @ORM\Table(name="doc_patient_relationships")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocPatientRelationshipsRepository")
 */
class DocPatientRelationships
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
     * @ORM\Column(name="DocId", type="integer")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $docId;

    /**
     * @var int
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
     * Set docId
     *
     * @param integer $docId
     *
     * @return DocPatientRelationships
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * Get docId
     *
     * @return int
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Set patientId
     *
     * @param integer $patientId
     *
     * @return DocPatientRelationships
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;

        return $this;
    }

    /**
     * Get patientId
     *
     * @return int
     */
    public function getPatientId()
    {
        return $this->patientId;
    }
}

