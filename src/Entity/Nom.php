<?php

namespace App\Entity;

use App\Repository\NomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NomRepository::class)
 */
class Nom
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot;

    /**
     * @ORM\Column(type="boolean")
     */
    private $genre;


    public function isMasculin(): bool
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre(bool $genre): void
    {
        $this->genre = $genre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMot(): ?string
    {
        return $this->mot;
    }

    public function setMot(string $mot): self
    {
        $this->mot = $mot;

        return $this;
    }
}
