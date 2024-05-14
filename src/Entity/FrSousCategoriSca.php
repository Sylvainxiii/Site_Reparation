<?php

namespace App\Entity;

use App\Repository\FrSousCategoriScaRepository;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $sca_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $sca_date_edit = null;

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

    public function getScaDateAdd(): ?\DateTimeInterface
    {
        return $this->sca_date_add;
    }

    public function setScaDateAdd(?\DateTimeInterface $sca_date_add): static
    {
        $this->sca_date_add = $sca_date_add;

        return $this;
    }

    public function getScaDateEdit(): ?\DateTimeInterface
    {
        return $this->sca_date_edit;
    }

    public function setScaDateEdit(?\DateTimeInterface $sca_date_edit): static
    {
        $this->sca_date_edit = $sca_date_edit;

        return $this;
    }
}
