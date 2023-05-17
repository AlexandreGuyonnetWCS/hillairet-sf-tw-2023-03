<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProjectImageRepository;

#[ORM\Entity(repositoryClass: ProjectImageRepository::class)]
#[ORM\HasLifecycleCallbacks]
class ProjectImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $credits = null;

    #[ORM\ManyToOne(inversedBy: 'image')]
    private ?Project $project = null;


    #[ORM\PostRemove]
    public function postRemove(): void
    {
        if ($this->picture) {
            unlink('uploads/project/' . $this->picture);
        }
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getPicture(): ?string
    {
        return $this->picture;
    }

    /**
     * @param string|null $picture
     * @return ProjectImage
     */
    public function setPicture(?string $picture): ProjectImage
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCredits(): ?string
    {
        return $this->credits;
    }

    /**
     * @param string|null $credits
     * @return ProjectImage
     */
    public function setCredits(?string $credits): self
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * @return Project|null
     */
    public function getProject(): ?Project
    {
        return $this->project;
    }

    /**
     * @param Project|null $project
     * @return ProjectImage
     */
    public function setProject(?Project $project): ProjectImage
    {
        $this->project = $project;

        return $this;
    }
}
