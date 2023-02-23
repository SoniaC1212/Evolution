<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ParticipantRepository::class)]
class Participant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan('today')]
    private ?\DateTimeInterface $dt = null;

    #[ORM\ManyToOne(inversedBy: 'participants')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'participants',cascade: ['remove'])]
    #[ORM\JoinColumn(name: 'event_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private ?Event $event = null;

  

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $users): self
    {
        $this->user = $users;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $events): self
    {
        $this->event = $events;

        return $this;
    }
}