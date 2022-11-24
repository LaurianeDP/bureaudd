<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user_id = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    private ?Campaign $campaign_id = null;

    #[ORM\Column]
    private ?int $level = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Race $race_id = null;

    #[ORM\ManyToMany(targetEntity: CharacterClass::class, inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CharacterClass $character_class_id = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Background $background = null;

    #[ORM\OneToMany(mappedBy: 'character_id', targetEntity: Note::class, orphanRemoval: true)]
    private Collection $notes;

    #[ORM\Column]
    private ?bool $active = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?user $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getCampaignId(): ?campaign
    {
        return $this->campaign_id;
    }

    public function setCampaignId(?campaign $campaign_id): self
    {
        $this->campaign_id = $campaign_id;

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

    public function getRaceId(): ?race
    {
        return $this->race_id;
    }

    public function setRaceId(?race $race_id): self
    {
        $this->race_id = $race_id;

        return $this;
    }

    public function getCharacterClassId(): ?CharacterClass
    {
        return $this->character_class_id;
    }

    public function setCharacterClassId(?CharacterClass $character_class_id): self
    {
        $this->character_class_id = $character_class_id;

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
}
