<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoryImageRepository;

#[ORM\Entity(repositoryClass: CategoryImageRepository::class)]
#[ORM\HasLifecycleCallbacks]
class CategoryImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\ManyToOne(inversedBy: 'image')]
    private ?Category $category = null;

    #[ORM\PostRemove]
    public function postRemove(): void
    {
        if ($this->picture) {
            unlink('uploads/category/' . $this->picture);
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
     * @return CategoryImage
     */
    public function setPicture(?string $picture): CategoryImage
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
