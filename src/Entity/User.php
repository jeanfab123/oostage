<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $user_creation_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $user_modification_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_firstname;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $user_zipcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_country;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $user_birthdate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_job_title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $user_job_description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $user_state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserCreationDate(): ?\DateTimeInterface
    {
        return $this->user_creation_date;
    }

    public function setUserCreationDate(\DateTimeInterface $user_creation_date): self
    {
        $this->user_creation_date = $user_creation_date;

        return $this;
    }

    public function getUserModificationDate(): ?\DateTimeInterface
    {
        return $this->user_modification_date;
    }

    public function setUserModificationDate(\DateTimeInterface $user_modification_date): self
    {
        $this->user_modification_date = $user_modification_date;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->user_email;
    }

    public function setUserEmail(string $user_email): self
    {
        $this->user_email = $user_email;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->user_password;
    }

    public function setUserPassword(string $user_password): self
    {
        $this->user_password = $user_password;

        return $this;
    }

    public function getUserLastname(): ?string
    {
        return $this->user_lastname;
    }

    public function setUserLastname(?string $user_lastname): self
    {
        $this->user_lastname = $user_lastname;

        return $this;
    }

    public function getUserFirstname(): ?string
    {
        return $this->user_firstname;
    }

    public function setUserFirstname(?string $user_firstname): self
    {
        $this->user_firstname = $user_firstname;

        return $this;
    }

    public function getUserZipcode(): ?int
    {
        return $this->user_zipcode;
    }

    public function setUserZipcode(?int $user_zipcode): self
    {
        $this->user_zipcode = $user_zipcode;

        return $this;
    }

    public function getUserCountry(): ?string
    {
        return $this->user_country;
    }

    public function setUserCountry(?string $user_country): self
    {
        $this->user_country = $user_country;

        return $this;
    }

    public function getUserBirthdate(): ?\DateTimeInterface
    {
        return $this->user_birthdate;
    }

    public function setUserBirthdate(?\DateTimeInterface $user_birthdate): self
    {
        $this->user_birthdate = $user_birthdate;

        return $this;
    }

    public function getUserJobTitle(): ?string
    {
        return $this->user_job_title;
    }

    public function setUserJobTitle(?string $user_job_title): self
    {
        $this->user_job_title = $user_job_title;

        return $this;
    }

    public function getUserJobDescription(): ?string
    {
        return $this->user_job_description;
    }

    public function setUserJobDescription(?string $user_job_description): self
    {
        $this->user_job_description = $user_job_description;

        return $this;
    }

    public function getUserState(): ?int
    {
        return $this->user_state;
    }

    public function setUserState(?int $user_state): self
    {
        $this->user_state = $user_state;

        return $this;
    }
}
