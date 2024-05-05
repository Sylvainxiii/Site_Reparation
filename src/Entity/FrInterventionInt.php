<?php

namespace App\Entity;

use App\Repository\FrInterventionIntRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrInterventionIntRepository::class)]
class FrInterventionInt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $int_type = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $int_date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $int_date_fin = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $int_numero_de_serie = null;

    #[ORM\Column(nullable: true)]
    private ?int $int_difficulte = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $int_description = null;

    #[ORM\Column]
    private ?int $int_visibilite = null;

    #[ORM\ManyToOne]
    private ?FrObjetObj $fk_obj_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrUtilisateurUti $fk_uti_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntType(): ?string
    {
        return $this->int_type;
    }

    public function setIntType(string $int_type): static
    {
        $this->int_type = $int_type;

        return $this;
    }

    public function getIntDateDebut(): ?\DateTimeInterface
    {
        return $this->int_date_debut;
    }

    public function setIntDateDebut(?\DateTimeInterface $int_date_debut): static
    {
        $this->int_date_debut = $int_date_debut;

        return $this;
    }

    public function getIntDateFin(): ?\DateTimeInterface
    {
        return $this->int_date_fin;
    }

    public function setIntDateFin(?\DateTimeInterface $int_date_fin): static
    {
        $this->int_date_fin = $int_date_fin;

        return $this;
    }

    public function getIntNumeroDeSerie(): ?string
    {
        return $this->int_numero_de_serie;
    }

    public function setIntNumeroDeSerie(?string $int_numero_de_serie): static
    {
        $this->int_numero_de_serie = $int_numero_de_serie;

        return $this;
    }

    public function getIntDifficulte(): ?int
    {
        return $this->int_difficulte;
    }

    public function setIntDifficulte(?int $int_difficulte): static
    {
        $this->int_difficulte = $int_difficulte;

        return $this;
    }

    public function getIntDescription(): ?string
    {
        return $this->int_description;
    }

    public function setIntDescription(?string $int_description): static
    {
        $this->int_description = $int_description;

        return $this;
    }

    public function getIntVisibilite(): ?int
    {
        return $this->int_visibilite;
    }

    public function setIntVisibilite(int $int_visibilite): static
    {
        $this->int_visibilite = $int_visibilite;

        return $this;
    }

    public function getFkObjId(): ?FrObjetObj
    {
        return $this->fk_obj_id;
    }

    public function setFkObjId(?FrObjetObj $fk_obj_id): static
    {
        $this->fk_obj_id = $fk_obj_id;

        return $this;
    }

    public function getFkUtiId(): ?FrUtilisateurUti
    {
        return $this->fk_uti_id;
    }

    public function setFkUtiId(?FrUtilisateurUti $fk_uti_id): static
    {
        $this->fk_uti_id = $fk_uti_id;

        return $this;
    }
}
