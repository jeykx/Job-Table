<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jobtitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $companytitle;

    /**
     * @ORM\Column(type="date")
     */
    private $dateapplication;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $feedback;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobtitle(): ?string
    {
        return $this->jobtitle;
    }

    public function setJobtitle(string $jobtitle): self
    {
        $this->jobtitle = $jobtitle;

        return $this;
    }

    public function getCompanytitle(): ?string
    {
        return $this->companytitle;
    }

    public function setCompanytitle(?string $companytitle): self
    {
        $this->companytitle = $companytitle;

        return $this;
    }

    public function getDateapplication(): ?\DateTimeInterface
    {
        return $this->dateapplication;
    }

    public function setDateapplication(\DateTimeInterface $dateapplication): self
    {
        $this->dateapplication = $dateapplication;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(?string $feedback): self
    {
        $this->feedback = $feedback;

        return $this;
    }
}
