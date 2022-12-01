<?php

namespace App\Entity;

use App\Repository\BackgroundRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BackgroundRepository::class)]
class Background
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getCharacters", "getBackgrounds"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getCharacters", "getBackgrounds"])]
    private ?string $background_name = null;

    #[ORM\OneToMany(mappedBy: 'background', targetEntity: Character::class)]
    #[Groups(["getBackgrounds"])]
    private Collection $characters;

    #[ORM\ManyToMany(targetEntity: Skill::class, mappedBy: 'background')]
    #[Groups(["getBackgrounds"])]
    private Collection $skills;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
        $this->skills = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBackgroundName(): ?string
    {
        return $this->background_name;
    }

    public function setBackgroundName(string $background_name): self
    {
        $this->background_name = $background_name;

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
            $character->setBackground($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): self
    {
        if ($this->characters->removeElement($character)) {
            // set the owning side to null (unless already changed)
            if ($character->getBackground() === $this) {
                $character->setBackground(null);
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
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        $this->skills->removeElement($skill);

        return $this;
    }
}
