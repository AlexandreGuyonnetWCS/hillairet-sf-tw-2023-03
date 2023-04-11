<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TeamRepository;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'team')]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $summary = null;

    #[ORM\PostRemove]
    public function postRemove(): void
    {
        if ($this->picture) {
            unlink('uploads/team/' . $this->picture);
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
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Team
     */
    public function setFirstName(string $firstName): Team
    {
        $this->firstName = $firstName;

        return $this;
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
     * @return Team
     */
    public function setPicture(?string $picture): Team
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * @param string|null $summary
     * @return Team
     */
    public function setSummary(?string $summary): Team
    {
        $this->summary = $summary;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getFirstName();
    }
}
