<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PublisherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublisherRepository::class)]
#[ApiResource]
class Publisher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: Gizmondo::class, mappedBy: 'publisher', orphanRemoval: true)]
    private Collection $gizmondos;

    public function __construct()
    {
        $this->gizmondos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Gizmondo>
     */
    public function getGizmondos(): Collection
    {
        return $this->gizmondos;
    }

    public function addGizmondo(Gizmondo $gizmondo): static
    {
        if (!$this->gizmondos->contains($gizmondo)) {
            $this->gizmondos->add($gizmondo);
            $gizmondo->setPublisher($this);
        }

        return $this;
    }

    public function removeGizmondo(Gizmondo $gizmondo): static
    {
        if ($this->gizmondos->removeElement($gizmondo)) {
            // set the owning side to null (unless already changed)
            if ($gizmondo->getPublisher() === $this) {
                $gizmondo->setPublisher(null);
            }
        }

        return $this;
    }
}
