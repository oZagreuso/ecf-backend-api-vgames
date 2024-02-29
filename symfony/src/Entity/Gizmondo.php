<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GizmondoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GizmondoRepository::class)]
#[ApiResource]
class Gizmondo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'gizmondos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Publisher $publisher = null;

    #[ORM\Column(length: 140)]
    private ?string $game = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column(length: 120)]
    private ?string $dev = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublisher(): ?Publisher
    {
        return $this->publisher;
    }

    public function setPublisher(?Publisher $publisher): static
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(string $game): static
    {
        $this->game = $game;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getDev(): ?string
    {
        return $this->dev;
    }

    public function setDev(string $dev): static
    {
        $this->dev = $dev;

        return $this;
    }
}
