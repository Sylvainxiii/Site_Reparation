<?php

namespace App\Entity;

use App\Repository\FrSousCategoriScaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrSousCategoriScaRepository::class)]
class FrSousCategoriSca
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $sca_nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sca_description = null;

    #[ORM\ManyToOne(inversedBy: 'frSousCategoriScas')]
    private ?FrCategorieCat $fk_cat_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScaNom(): ?string
    {
        return $this->sca_nom;
    }

    public function setScaNom(string $sca_nom): static
    {
        $this->sca_nom = $sca_nom;

        return $this;
    }

    public function getScaDescription(): ?string
    {
        return $this->sca_description;
    }

    public function setScaDescription(?string $sca_description): static
    {
        $this->sca_description = $sca_description;

        return $this;
    }

    public function getFkCatId(): ?FrCategorieCat
    {
        return $this->fk_cat_id;
    }

    public function setFkCatId(?FrCategorieCat $fk_cat_id): static
    {
        $this->fk_cat_id = $fk_cat_id;

        return $this;
    }
}
