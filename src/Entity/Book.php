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

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rok = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vydavatel = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    private ?Autor $autor = null;


    public function setKniha(string $kniha): static
    {
        $this->kniha = $kniha;

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

    public function getAutor(): ?Autor
    {
        return $this->autor;
    }

    public function setAutor(?Autor $autor): static
    {
        $this->autor = $autor;

        return $this;
    }
}
