<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Product = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $Categorys = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->Product;
    }

    public function getProduct(): ?string
    {
        return $this->Product;
    }

    public function setProduct(string $Product): static
    {
        $this->Product = $Product;

        return $this;
    }

    public function getCategorys(): ?Category
    {
        return $this->Categorys;
    }

    public function setCategorys(?Category $Categorys): static
    {
        $this->Categorys = $Categorys;

        return $this;
    }
}