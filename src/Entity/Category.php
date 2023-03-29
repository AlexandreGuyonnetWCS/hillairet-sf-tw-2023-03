<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'category')]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 100, unique: true)]
    private string $name;

    #[ORM\Column(type: 'string', length: 100, unique: true)]
    private string $slug;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $summary = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(
        mappedBy: 'category',
        targetEntity: CategoryImage::class,
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Category
     */
    public function setName(string $name): Category
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Category
     */
    public function setSlug(string $slug): Category
    {
        $this->slug = $slug;

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
     * @return Category
     */
    public function setSummary(?string $summary): Category
    {
        $this->summary = $summary;

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
     * @return Category
     */
    public function setDescription(?string $description): Category
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, CategoryImage>
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    /**
     * @param CategoryImage $image
     * @return Category
     */
    public function addImage(CategoryImage $image): Category
    {
        if (!$this->image->contains($image)) {
            $this->image->add($image);
            $image->setCategory($this);
        }

        return $this;
    }

    /**
     * @param CategoryImage $image
     * @return Category
     */
    public function removeImage(CategoryImage $image): Category
    {
        if ($this->image->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getCategory() === $this) {
                $image->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
