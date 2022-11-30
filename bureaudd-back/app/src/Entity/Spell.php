<?php

namespace App\Entity;

use App\Repository\SpellRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpellRepository::class)]
class Spell
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $spell_name = null;

    #[ORM\Column]
    private ?int $spell_level = null;

    #[ORM\Column(length: 255)]
    private ?string $incantation_duration = null;

    #[ORM\Column]
    private ?bool $concentration = null;

    #[ORM\Column(length: 255)]
    private ?string $spell_range = null;

    #[ORM\Column]
    private ?bool $ritual = null;

    #[ORM\Column(length: 255)]
    private ?string $spell_description_short = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $spell_description_long = null;

    #[ORM\ManyToMany(targetEntity: Race::class, inversedBy: 'spells')]
    private Collection $race;

    #[ORM\ManyToMany(targetEntity: CharacterClass::class, inversedBy: 'spells')]
    private Collection $characterClass;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpellName(): ?string
    {
        return $this->spell_name;
    }

    public function setSpellName(string $spell_name): self
    {
        $this->spell_name = $spell_name;

        return $this;
    }

    public function getSpellLevel(): ?int
    {
        return $this->spell_level;
    }

    public function setSpellLevel(int $spell_level): self
    {
        $this->spell_level = $spell_level;

        return $this;
    }

    public function getIncantationDuration(): ?string
    {
        return $this->incantation_duration;
    }

    public function setIncantationDuration(string $incantation_duration): self
    {
        $this->incantation_duration = $incantation_duration;

        return $this;
    }

    public function isConcentration(): ?bool
    {
        return $this->concentration;
    }

    public function setConcentration(bool $concentration): self
    {
        $this->concentration = $concentration;

        return $this;
    }

    public function getSpellRange(): ?string
    {
        return $this->spell_range;
    }

    public function setSpellRange(string $spell_range): self
    {
        $this->spell_range = $spell_range;

        return $this;
    }

    public function isRitual(): ?bool
    {
        return $this->ritual;
    }

    public function setRitual(bool $ritual): self
    {
        $this->ritual = $ritual;

        return $this;
    }

    public function getSpellDescriptionShort(): ?string
    {
        return $this->spell_description_short;
    }

    public function setSpellDescriptionShort(string $spell_description_short): self
    {
        $this->spell_description_short = $spell_description_short;

        return $this;
    }

    public function getSpellDescriptionLong(): ?string
    {
        return $this->spell_description_long;
    }

    public function setSpellDescriptionLong(string $spell_description_long): self
    {
        $this->spell_description_long = $spell_description_long;

        return $this;
    }
}
