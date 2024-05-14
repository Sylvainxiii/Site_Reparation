<?php

namespace App\Entity;

use App\Repository\FrMarqueMarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrMarqueMarRepository::class)]
class FrMarqueMar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $mar_nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $mar_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $mar_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarNom(): ?string
    {
        return $this->mar_nom;
    }

    public function setMarNom(string $mar_nom): static
    {
        $this->mar_nom = $mar_nom;

        return $this;
    }

    public function getMarDateAdd(): ?\DateTimeInterface
    {
        return $this->mar_date_add;
    }

    public function setMarDateAdd(?\DateTimeInterface $mar_date_add): static
    {
        $this->mar_date_add = $mar_date_add;

        return $this;
    }

    public function getMarDateEdit(): ?\DateTimeInterface
    {
        return $this->mar_date_edit;
    }

    public function setMarDateEdit(?\DateTimeInterface $mar_date_edit): static
    {
        $this->mar_date_edit = $mar_date_edit;

        return $this;
    }
}
