<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $skill_name = null;

    #[ORM\Column]
    private ?int $skill_level = null;

    #[ORM\Column(length: 255)]
    private ?string $skill_description_short = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $skill_description_long = null;

    #[ORM\ManyToMany(targetEntity: CharacterClass::class, inversedBy: 'skills')]
    private Collection $character_class;

    #[ORM\ManyToMany(targetEntity: Race::class, inversedBy: 'skills')]
    private Collection $race;

    #[ORM\ManyToMany(targetEntity: Background::class, inversedBy: 'skills')]
    private Collection $background;

    public function __construct()
    {
        $this->character_class = new ArrayCollection();
        $this->race = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkillName(): ?string
    {
        return $this->skill_name;
    }

    public function setSkillName(string $skill_name): self
    {
        $this->skill_name = $skill_name;

        return $this;
    }

    public function getSkillLevel(): ?int
    {
        return $this->skill_level;
    }

    public function setSkillLevel(int $skill_level): self
    {
        $this->skill_level = $skill_level;

        return $this;
    }

    public function getSkillDescriptionShort(): ?string
    {
        return $this->skill_description_short;
    }

    public function setSkillDescriptionShort(string $skill_description_short): self
    {
        $this->skill_description_short = $skill_description_short;

        return $this;
    }

    public function getSkillDescriptionLong(): ?string
    {
        return $this->skill_description_long;
    }

    public function setSkillDescriptionLong(string $skill_description_long): self
    {
        $this->skill_description_long = $skill_description_long;

        return $this;
    }

    /**
     * @return Collection<int, CharacterClass>
     */
    public function getCharacterClassId(): Collection
    {
        return $this->character_class;
    }

    public function addCharacterClassId(CharacterClass $characterClass): self
    {
        if (!$this->character_class->contains($characterClass)) {
            $this->character_class->add($characterClass);
        }

        return $this;
    }

    public function removeCharacterClassId(CharacterClass $characterClass): self
    {
        $this->character_class->removeElement($characterClass);

        return $this;
    }

    /**
     * @return Collection<int, race>
     */
    public function getRaceId(): Collection
    {
        return $this->race;
    }

    public function addRaceId(race $race): self
    {
        if (!$this->race->contains($race)) {
            $this->race->add($race);
        }

        return $this;
    }

    public function removeRaceId(race $race): self
    {
        $this->race->removeElement($race);

        return $this;
    }

        /**
     * @return Collection<int, background>
     */
    public function getBackgroundId(): Collection
    {
        return $this->background;
    }

    public function addBackgroundId(background $background): self
    {
        if (!$this->background->contains($background)) {
            $this->background->add($background);
        }

        return $this;
    }

    public function removeBackgroundId(background $background): self
    {
        $this->background->removeElement($background);

        return $this;
    }
}
