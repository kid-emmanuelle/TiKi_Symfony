<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\ReviewRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ReviewRepository::class)]
#[ORM\Table(name: 'review')]
class Review
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
    private string $text;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    #[Assert\Range(
        notInRangeMessage: 'The number of star must be between {{ min }} and {{ max }}.',
        min: 0,
        max: 5,
    )]
    private int $star;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'user')]
    private User $user;

    #[ORM\ManyToOne(targetEntity: Book::class, inversedBy: 'book')]
    private Book $book;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Review
    {
        $this->id = $id;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): Review
    {
        $this->text = $text;
        return $this;
    }

    public function getStar(): int
    {
        return $this->star;
    }

    public function setStar(int $star): Review
    {
        $this->star = $star;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): Review
    {
        $this->user = $user;
        return $this;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBook(Book $book): Review
    {
        $this->book = $book;
        return $this;
    }






}