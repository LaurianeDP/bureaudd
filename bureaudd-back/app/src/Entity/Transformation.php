<?php

namespace App\Entity;

use App\Repository\TransformationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransformationRepository::class)]
class Transformation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $transformation_name = null;

    #[ORM\Column(length: 255)]
    private ?string $size = null;

    #[ORM\Column]
    private ?int $armor_class = null;

    #[ORM\Column(length: 255)]
    private ?string $power = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $transformation_description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransformationName(): ?string
    {
        return $this->transformation_name;
    }

    public function setTransformationName(string $transformation_name): self
    {
        $this->transformation_name = $transformation_name;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getArmorClass(): ?int
    {
        return $this->armor_class;
    }

    public function setArmorClass(int $armor_class): self
    {
        $this->armor_class = $armor_class;

        return $this;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getTransformationDescription(): ?string
    {
        return $this->transformation_description;
    }

    public function setTransformationDescription(string $transformation_description): self
    {
        $this->transformation_description = $transformation_description;

        return $this;
    }
}
