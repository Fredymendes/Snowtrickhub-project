<?php

namespace App\Entity;

use App\Repository\FiguresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FiguresRepository::class)]
class Figures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $tricktype = null;

    #[ORM\Column(length: 255)]
    private ?string $ridingstyle = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTricktype(): ?string
    {
        return $this->tricktype;
    }

    public function setTricktype(string $tricktype): static
    {
        $this->tricktype = $tricktype;

        return $this;
    }

    public function getRidingstyle(): ?string
    {
        return $this->ridingstyle;
    }

    public function setRidingstyle(string $ridingstyle): static
    {
        $this->ridingstyle = $ridingstyle;

        return $this;
    }
}
