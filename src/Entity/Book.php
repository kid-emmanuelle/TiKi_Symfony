<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\BookRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ORM\Table(name: 'book')]
class Book
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: 'The title must be at least {{ limit }} characters long',
        maxMessage: 'The title cannot be longer than {{ limit }} characters',
    )]
    private string $title;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 10,
        max: 100,
        minMessage: 'The description must be at least {{ limit }} characters long',
        maxMessage: 'The description cannot be longer than {{ limit }} characters',
    )]
    private string $description;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    #[Assert\PositiveOrZero]
    private int $price;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'The description must be at least {{ limit }} characters long',
        maxMessage: 'The description cannot be longer than {{ limit }} characters',
    )]
    private int $format; #type de livre

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    private string $image;

}