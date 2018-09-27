<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobRepository")
 */
class Job
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $job_creation_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $job_modification_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $job_description;

    /**
     * @ORM\Column(type="integer")
     */
    private $job_state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobCreationDate(): ?\DateTimeInterface
    {
        return $this->job_creation_date;
    }

    public function setJobCreationDate(\DateTimeInterface $job_creation_date): self
    {
        $this->job_creation_date = $job_creation_date;

        return $this;
    }

    public function getJobModificationDate(): ?\DateTimeInterface
    {
        return $this->job_modification_date;
    }

    public function setJobModificationDate(\DateTimeInterface $job_modification_date): self
    {
        $this->job_modification_date = $job_modification_date;

        return $this;
    }

    public function getJobName(): ?string
    {
        return $this->job_name;
    }

    public function setJobName(string $job_name): self
    {
        $this->job_name = $job_name;

        return $this;
    }

    public function getJobDescription(): ?string
    {
        return $this->job_description;
    }

    public function setJobDescription(?string $job_description): self
    {
        $this->job_description = $job_description;

        return $this;
    }

    public function getJobState(): ?int
    {
        return $this->job_state;
    }

    public function setJobState(int $job_state): self
    {
        $this->job_state = $job_state;

        return $this;
    }
}
