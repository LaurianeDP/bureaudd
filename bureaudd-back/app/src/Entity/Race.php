<?php

namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: RaceRepository::class)]
class Race
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getCharacters", "getRaces"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getCharacters", "getRaces"])]
    private ?string $race_name = null;

    #[ORM\OneToMany(mappedBy: 'race', targetEntity: Character::class)]
    #[Groups(["getRaces"])]
    private Collection $characters;

    #[ORM\ManyToMany(targetEntity: Skill::class, mappedBy: 'race')]
    #[Groups(["getRaces"])]
    private Collection $skills;

    #[ORM\ManyToMany(targetEntity: Spell::class, mappedBy: 'race')]
    #[Groups(["getRaces"])]
    private Collection $spells;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->spells = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRaceName(): ?string
    {
        return $this->race_name;
    }

    public function setRaceName(string $race_name): self
    {
        $this->race_name = $race_name;

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
            $character->setRaceId($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): self
    {
        if ($this->characters->removeElement($character)) {
            // set the owning side to null (unless already changed)
            if ($character->getRaceId() === $this) {
                $character->setRaceId(null);
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
            $skill->addRaceId($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            $skill->removeRaceId($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Spell>
     */
    public function getSpells(): Collection
    {
        return $this->spells;
    }

    public function addSpell(Spell $spell): self
    {
        if (!$this->spells->contains($spell)) {
            $this->spells->add($spell);
            $spell->addRace($this);
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        if ($this->spells->removeElement($spell)) {
            $spell->removeRace($this);
        }

        return $this;
    }

}
