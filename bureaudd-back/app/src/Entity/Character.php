<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`playable_character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getCharacters", "getUsers"])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters"])]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters", "getUsers"])]
    private ?Campaign $campaign = null;

    #[ORM\Column]
    #[Groups(["getCharacters", "getUsers"])]
    private ?int $level = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters", "getUsers"])]
    private ?Race $race = null;

    #[ORM\ManyToMany(targetEntity: CharacterClass::class, mappedBy: 'characters')]
    #[Groups(["getCharacters", "getUsers"])]
    private Collection $characterClasses;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters", "getUsers"])]
    private ?Background $background = null;

    #[ORM\OneToMany(mappedBy: 'character', targetEntity: Note::class, orphanRemoval: true)]
    // #[Groups(["getCharacters", "getUsers"])]
    private Collection $notes;

    #[ORM\Column]
    #[Groups(["getCharacters", "getUsers"])]
    private ?bool $active = null;

    #[ORM\Column(length: 100)]
    #[Groups(["getCharacters", "getUsers"])]
    private ?string $firstName = null;

    #[ORM\Column(length: 200, nullable: true)]
    #[Groups(["getCharacters", "getUsers"])]
    private ?string $lastName = null;

    public function __construct()
    {
        $this->characterClasses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCampaign(): ?campaign
    {
        return $this->campaign;
    }

    public function setCampaign(?campaign $campaign): self
    {
        $this->campaign = $campaign;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getRace(): ?race
    {
        return $this->race;
    }

    public function setRace(?race $race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * @return Collection<int, CharacterClass>
     */
    public function getCharacterClasses(): Collection
    {
        return $this->characterClasses;
    }

    public function addCharacterClass(CharacterClass $characterClass): self
    {
        if (!$this->characterClasses->contains($characterClass)) {
            $this->characterClasses->add($characterClass);
        }

        return $this;
    }

    public function removeCharacterClass(CharacterClass $characterClass): self
    {
        if ($this->characterClasses->removeElement($characterClass)) {
            $characterClass->removeCharacterId($this);
        }

        return $this;
    }

    public function getBackground(): ?Background
    {
        return $this->background;
    }

    public function setBackground(?Background $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}
