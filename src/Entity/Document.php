<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DocumentRepository::class)]
class Document
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"nomdocument is required")]

    private ?string $nomdocument = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"type is required")]

    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"editeur is required")]


    private ?string $editeur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomdocument(): ?string
    {
        return $this->nomdocument;
    }

    public function setNomdocument(string $nomdocument): self
    {
        $this->nomdocument = $nomdocument;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }
}
