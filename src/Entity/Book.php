<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $kniha = null;

    #[ORM\Column(length: 255)]
    private ?string $autor = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rok = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vydavatel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKniha(): ?string
    {
        return $this->kniha;
    }

    public function setKniha(string $kniha): static
    {
        $this->kniha = $kniha;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): static
    {
        $this->autor = $autor;

        return $this;
    }

    public function getRok(): ?\DateTimeInterface
    {
        return $this->rok;
    }

    public function setRok(?\DateTimeInterface $rok): static
    {
        $this->rok = $rok;

        return $this;
    }

    public function getVydavatel(): ?string
    {
        return $this->vydavatel;
    }

    public function setVydavatel(?string $vydavatel): static
    {
        $this->vydavatel = $vydavatel;

        return $this;
    }
}
