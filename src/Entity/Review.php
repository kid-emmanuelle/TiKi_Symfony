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
    private string $star;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'user')]
    private User $user;

    #[ORM\ManyToOne(targetEntity: Book::class, inversedBy: 'book')]
    private Book $book;


}