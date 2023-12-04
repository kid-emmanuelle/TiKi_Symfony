<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\ImageRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ImageRepository::class)]
#[ORM\Table(name: 'image')]
class Image
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    private string $link;

    #[ORM\ManyToOne(targetEntity: Book::class, inversedBy: 'book')]
    private Book $book;





}