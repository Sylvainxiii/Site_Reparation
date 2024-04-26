<?php

namespace App\Entity;

use App\Repository\FrOutilsOutRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrOutilsOutRepository::class)]
class FrOutilsOut
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $out_id = null;

    #[ORM\Column(length: 50)]
    private ?string $out_nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $out_reference = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $out_description = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $out_photo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $out_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $out_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOutId(): ?int
    {
        return $this->out_id;
    }

    public function setOutId(int $out_id): static
    {
        $this->out_id = $out_id;

        return $this;
    }

    public function getOutNom(): ?string
    {
        return $this->out_nom;
    }

    public function setOutNom(string $out_nom): static
    {
        $this->out_nom = $out_nom;

        return $this;
    }

    public function getOutReference(): ?string
    {
        return $this->out_reference;
    }

    public function setOutReference(?string $out_reference): static
    {
        $this->out_reference = $out_reference;

        return $this;
    }

    public function getOutDescription(): ?string
    {
        return $this->out_description;
    }

    public function setOutDescription(?string $out_description): static
    {
        $this->out_description = $out_description;

        return $this;
    }

    public function getOutPhoto(): ?string
    {
        return $this->out_photo;
    }

    public function setOutPhoto(?string $out_photo): static
    {
        $this->out_photo = $out_photo;

        return $this;
    }

    public function getOutDateAdd(): ?\DateTimeInterface
    {
        return $this->out_date_add;
    }

    public function setOutDateAdd(?\DateTimeInterface $out_date_add): static
    {
        $this->out_date_add = $out_date_add;

        return $this;
    }

    public function getOutDateEdit(): ?\DateTimeInterface
    {
        return $this->out_date_edit;
    }

    public function setOutDateEdit(?\DateTimeInterface $out_date_edit): static
    {
        $this->out_date_edit = $out_date_edit;

        return $this;
    }
}
