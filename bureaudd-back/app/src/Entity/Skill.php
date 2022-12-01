<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getRaces", "getBackgrounds"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getRaces", "getBackgrounds"])]
    private ?string $skill_name = null;

    #[ORM\Column]
    private ?int $skill_level = null;

    #[ORM\Column(length: 255)]
    private ?string $skill_description_short = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $skill_description_long = null;

    #[ORM\ManyToMany(targetEntity: CharacterClass::class, inversedBy: 'skills')]
    private Collection $characterClass;

    #[ORM\ManyToMany(targetEntity: Race::class, inversedBy: 'skills')]
    private Collection $race;

    #[ORM\ManyToMany(targetEntity: Background::class, inversedBy: 'skills')]
    private Collection $background;

    #[ORM\ManyToMany(targetEntity: Background::class, mappedBy: 'skills')]
    private Collection $backgrounds;

    public function __construct()
    {
        $this->characterClass = new ArrayCollection();
        $this->race = new ArrayCollection();
        $this->background = new ArrayCollection();
        $this->backgrounds = new ArrayCollection();
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
     * @return Collection<int, race>
     */
    public function getRace(): Collection
    {
        return $this->race;
    }

    public function addRace(race $race): self
    {
        if (!$this->race->contains($race)) {
            $this->race->add($race);
        }

        return $this;
    }

    public function removeRace(race $race): self
    {
        $this->race->removeElement($race);

        return $this;
    }

        /**
     * @return Collection<int, background>
     */
    public function getBackground(): Collection
    {
        return $this->background;
    }

    public function addBackground(background $background): self
    {
        if (!$this->background->contains($background)) {
            $this->background->add($background);
        }

        return $this;
    }

    public function removeBackground(background $background): self
    {
        $this->background->removeElement($background);

        return $this;
    }

    /**
     * @return Collection<int, Background>
     */
    public function getBackgrounds(): Collection
    {
        return $this->backgrounds;
    }
}
