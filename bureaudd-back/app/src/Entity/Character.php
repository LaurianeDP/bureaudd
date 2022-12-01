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
    #[Groups(["getCharacters", "getUsers", "getRaces", "getBackgrounds"])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters"])]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters"])]
    private ?Campaign $campaign = null;

    #[ORM\Column]
    #[Groups(["getCharacters", "getUsers", "getRaces", "getBackgrounds"])]
    private ?int $level = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters"])]
    private ?Race $race = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[Groups(["getCharacters"])]
    private ?Background $background = null;

    #[ORM\Column]
    #[Groups(["getCharacters", "getUsers"])]
    private ?bool $active = null;

    #[ORM\Column(length: 100)]
    #[Groups(["getCharacters", "getUsers", "getRaces", "getBackgrounds"])]
    private ?string $firstName = null;

    #[ORM\Column(length: 200, nullable: true)]
    #[Groups(["getCharacters", "getUsers", "getRaces", "getBackgrounds"])]
    private ?string $lastName = null;

    #[ORM\Column]
    #[Groups(["getCharacters"])]
    private ?bool $npc = null;

    #[ORM\ManyToMany(targetEntity: CharacterClass::class, inversedBy: 'characters')]
    #[Groups(["getCharacters"])]
    private Collection $characterClass;

    #[ORM\OneToMany(mappedBy: 'characterAssociated', targetEntity: Note::class, orphanRemoval: true)]
    #[Groups(["getCharacters"])]
    private Collection $notes;

    public function __construct()
    {
        $this->characterClass = new ArrayCollection();
        $this->notes = new ArrayCollection();
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

    public function isNpc(): ?bool
    {
        return $this->npc;
    }

    public function setNpc(bool $npc): self
    {
        $this->npc = $npc;

        return $this;
    }

    /**
     * @return Collection<int, CharacterClass>
     */
    public function getCharacterClass(): Collection
    {
        return $this->characterClass;
    }

    public function addCharacterClass(CharacterClass $characterClass): self
    {
        if (!$this->characterClass->contains($characterClass)) {
            $this->characterClass->add($characterClass);
        }

        return $this;
    }

    public function removeCharacterClass(CharacterClass $characterClass): self
    {
        $this->characterClass->removeElement($characterClass);

        return $this;
    }

    /**
     * @return Collection<int, Note>
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setCharacterAssociated($this);
        }

        return $this;
    }

    public function removeNote(Note $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getCharacterAssociated() === $this) {
                $note->setCharacterAssociated(null);
            }
        }

        return $this;
    }
}
