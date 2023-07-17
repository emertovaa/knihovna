<?php

namespace App\Entity;

use App\Repository\AutorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutorRepository::class)]
class Autor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $jmeno = null;

    #[ORM\Column(length: 255)]
    private ?string $prijmeni = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rokNarozeni = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJmeno(): ?string
    {
        return $this->jmeno;
    }

    public function setJmeno(string $jmeno): static
    {
        $this->jmeno = $jmeno;

        return $this;
    }

    public function getPrijmeni(): ?string
    {
        return $this->prijmeni;
    }

    public function setPrijmeni(string $prijmeni): static
    {
        $this->prijmeni = $prijmeni;

        return $this;
    }

    public function getRokNarozeni(): ?string
    {
        return $this->rokNarozeni;
    }

    public function setRokNarozeni(?string $rokNarozeni): static
    {
        $this->rokNarozeni = $rokNarozeni;

        return $this;
    }
}
