<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\StudentRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: 'students')]
class Student
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    private string $name;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private string $firstname;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    #[Assert\PositiveOrZero]
    private int $old;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Student
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Student
    {
        $this->name = $name;
        return $this;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): Student
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getOld(): int
    {
        return $this->old;
    }

    public function setOld(int $old): Student
    {
        $this->old = $old;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->name, $this->firstname);
    }


}