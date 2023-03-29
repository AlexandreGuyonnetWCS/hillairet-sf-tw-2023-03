<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ORM\Table(name: 'project')]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $place = null;

    #[ORM\Column(nullable: true)]
    private ?DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(
        mappedBy: 'project',
        targetEntity: ProjectImage::class,
        orphanRemoval: true,
        cascade: ['persist']
    )]
    private Collection $image;

    public function __construct()
    {
        $this->image = new ArrayCollection();
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Project
     */
    public function setDescription(?string $description): Project
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlace(): ?string
    {
        return $this->place;
    }

    /**
     * @param string|null $place
     * @return Project
     */
    public function setPlace(?string $place): Project
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeImmutable|null $createdAt
     * @return Project
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): Project
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, ProjectImage>
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    /**
     * @param ProjectImage $image
     * @return Project
     */
    public function addImage(ProjectImage $image): Project
    {
        if (!$this->image->contains($image)) {
            $this->image->add($image);
            $image->setProject($this);
        }

        return $this;
    }

    /**
     * @param ProjectImage $image
     * @return Project
     */
    public function removeImage(ProjectImage $image): Project
    {
        if ($this->image->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProject() === $this) {
                $image->setProject(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
