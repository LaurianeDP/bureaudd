<?php

namespace App\Entity;

use App\Repository\FeedbackRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: FeedbackRepository::class)]
class Feedback
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getUsers"])]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(["getUsers"])]
    private ?int $feedback_date = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getUsers"])]
    private ?string $feedback_type = null;

    #[ORM\Column(length: 255)]
    private ?string $feedback_content = null;

    #[ORM\ManyToOne(inversedBy: 'feedback')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeedbackDate(): ?int
    {
        return $this->feedback_date;
    }

    public function setFeedbackDate(int $feedback_date): self
    {
        $this->feedback_date = $feedback_date;

        return $this;
    }

    public function getFeedbackType(): ?string
    {
        return $this->feedback_type;
    }

    public function setFeedbackType(string $feedback_type): self
    {
        $this->feedback_type = $feedback_type;

        return $this;
    }

    public function getFeedbackContent(): ?string
    {
        return $this->feedback_content;
    }

    public function setFeedbackContent(string $feedback_content): self
    {
        $this->feedback_content = $feedback_content;

        return $this;
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
}
