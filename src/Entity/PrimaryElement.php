<?php

namespace App\Entity;

use App\Repository\PrimaryElementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrimaryElementRepository::class)
 */
class PrimaryElement
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
    private $type;

    /**
     * @ORM\Column(type="json")
     */
    private $words = [];

    /**
     * @ORM\Column(type="json", length=255, nullable=true)
     */
    private $groups = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $meaning;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getWords(): ?array
    {
        return $this->words;
    }

    public function setWords(array $words): self
    {
        $this->words = $words;

        return $this;
    }

    public function getGroups(): ?array
    {
        return $this->groups;
    }

    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getMeaning(): ?string
    {
        return $this->meaning;
    }

    public function setMeaning(?string $meaning): self
    {
        $this->meaning = $meaning;

        return $this;
    }
}
