<?php

namespace App\Entity;

use App\Repository\AdjectifRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdjectifRepository::class)
 */
class Adjectif implements WordInterface
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
