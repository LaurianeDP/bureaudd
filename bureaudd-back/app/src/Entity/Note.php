<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: NoteRepository::class)]
class Note
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getCharacters"])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getCharacters"])]
    private ?string $title = null;

    #[ORM\Column]
    #[Groups(["getCharacters"])]
    private ?int $note_date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $note_content = null;

    #[ORM\ManyToOne(inversedBy: 'notes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Character $characterAssociated = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getNoteDate(): ?int
    {
        return $this->note_date;
    }

    public function setNoteDate(int $note_date): self
    {
        $this->note_date = $note_date;

        return $this;
    }

    public function getNoteContent(): ?string
    {
        return $this->note_content;
    }

    public function setNoteContent(string $note_content): self
    {
        $this->note_content = $note_content;

        return $this;
    }

    public function getCharacterAssociated(): ?Character
    {
        return $this->characterAssociated;
    }

    public function setCharacterAssociated(?Character $characterAssociated): self
    {
        $this->characterAssociated = $characterAssociated;

        return $this;
    }
}
