<?php

namespace App\Entity;

use App\Repository\CharacterClassRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterClassRepository::class)]
class CharacterClass
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $class_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subclass = null;

    #[ORM\ManyToMany(targetEntity: Character::class, mappedBy: 'character_class')]
    private Collection $characters;

    #[ORM\ManyToMany(targetEntity: Skill::class, mappedBy: 'character_class')]
    private Collection $skills;

    #[ORM\ManyToMany(targetEntity: Spell::class, mappedBy: 'character_class')]
    private Collection $spells;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
        $this->skills = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassName(): ?string
    {
        return $this->class_name;
    }

    public function setClassName(string $class_name): self
    {
        $this->class_name = $class_name;

        return $this;
    }

    public function getSubclass(): ?string
    {
        return $this->subclass;
    }

    public function setSubclass(?string $subclass): self
    {
        $this->subclass = $subclass;

        return $this;
    }

    /**
     * @return Collection<int, Character>
     */
    public function getCharacters(): Collection
    {
        return $this->characters;
    }

    public function addCharacter(Character $character): self
    {
        if (!$this->characters->contains($character)) {
            $this->characters->add($character);
            $character->setCharacterClassId($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): self
    {
        if ($this->characters->removeElement($character)) {
            // set the owning side to null (unless already changed)
            if ($character->getCharacterClassId() === $this) {
                $character->setCharacterClassId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Skill>
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills->add($skill);
            $skill->addCharacterClassId($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            $skill->removeCharacterClassId($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, spell>
     */
    public function getSpells(): Collection
    {
        return $this->spells;
    }

    public function addSpell(Spell $spell): self
    {
        if (!$this->spells->contains($spell)) {
            $this->spells->add($spell);
            $spell->addCharacterClassId($this);
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        if ($this->spells->removeElement($spell)) {
            $spell->removeCharacterClassId($this);
        }

        return $this;
    }
}
