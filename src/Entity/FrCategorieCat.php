<?php

namespace App\Entity;

use App\Repository\FrCategorieCatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrCategorieCatRepository::class)]
class FrCategorieCat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $cat_id = null;

    #[ORM\Column(length: 50)]
    private ?string $cat_nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cat_description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrDomaineDom $fk_dom_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatId(): ?int
    {
        return $this->cat_id;
    }

    public function setCatId(int $cat_id): static
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    public function getCatNom(): ?string
    {
        return $this->cat_nom;
    }

    public function setCatNom(string $cat_nom): static
    {
        $this->cat_nom = $cat_nom;

        return $this;
    }

    public function getCatDescription(): ?string
    {
        return $this->cat_description;
    }

    public function setCatDescription(?string $cat_description): static
    {
        $this->cat_description = $cat_description;

        return $this;
    }

    public function getFkDomId(): ?FrDomaineDom
    {
        return $this->fk_dom_id;
    }

    public function setFkDomId(?FrDomaineDom $fk_dom_id): static
    {
        $this->fk_dom_id = $fk_dom_id;

        return $this;
    }
}
