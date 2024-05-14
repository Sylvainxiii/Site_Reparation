<?php

namespace App\Entity;

use App\Repository\FrObjetObjRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrObjetObjRepository::class)]
class FrObjetObj
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $obj_reference = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $obj_caracteristiques = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $obj_manuel = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrMarqueMar $fk_mar_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrSousCategoriSca $fk_sca_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $obj_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $obj_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjReference(): ?string
    {
        return $this->obj_reference;
    }

    public function setObjReference(string $obj_reference): static
    {
        $this->obj_reference = $obj_reference;

        return $this;
    }

    public function getObjCaracteristiques(): ?string
    {
        return $this->obj_caracteristiques;
    }

    public function setObjCaracteristiques(?string $obj_caracteristiques): static
    {
        $this->obj_caracteristiques = $obj_caracteristiques;

        return $this;
    }

    public function getObjManuel(): ?string
    {
        return $this->obj_manuel;
    }

    public function setObjManuel(?string $obj_manuel): static
    {
        $this->obj_manuel = $obj_manuel;

        return $this;
    }

    public function getFkMarId(): ?FrMarqueMar
    {
        return $this->fk_mar_id;
    }

    public function setFkMarId(?FrMarqueMar $fk_mar_id): static
    {
        $this->fk_mar_id = $fk_mar_id;

        return $this;
    }

    public function getFkScaId(): ?FrSousCategoriSca
    {
        return $this->fk_sca_id;
    }

    public function setFkScaId(?FrSousCategoriSca $fk_sca_id): static
    {
        $this->fk_sca_id = $fk_sca_id;

        return $this;
    }

    public function getObjDateAdd(): ?\DateTimeInterface
    {
        return $this->obj_date_add;
    }

    public function setObjDateAdd(?\DateTimeInterface $obj_date_add): static
    {
        $this->obj_date_add = $obj_date_add;

        return $this;
    }

    public function getObjDateEdit(): ?\DateTimeInterface
    {
        return $this->obj_date_edit;
    }

    public function setObjDateEdit(?\DateTimeInterface $obj_date_edit): static
    {
        $this->obj_date_edit = $obj_date_edit;

        return $this;
    }
}
