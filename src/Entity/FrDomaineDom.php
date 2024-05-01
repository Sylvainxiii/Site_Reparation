<?php

namespace App\Entity;

use App\Repository\FrDomaineDomRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrDomaineDomRepository::class)]
class FrDomaineDom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $dom_nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dom_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dom_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomNom(): ?string
    {
        return $this->dom_nom;
    }

    public function setDomNom(string $dom_nom): static
    {
        $this->dom_nom = $dom_nom;

        return $this;
    }

    public function getDomDateAdd(): ?\DateTimeInterface
    {
        return $this->dom_date_add;
    }

    public function setDomDateAdd(?\DateTimeInterface $dom_date_add): static
    {
        $this->dom_date_add = $dom_date_add;

        return $this;
    }

    public function getDomDateEdit(): ?\DateTimeInterface
    {
        return $this->dom_date_edit;
    }

    public function setDomDateEdit(?\DateTimeInterface $dom_date_edit): static
    {
        $this->dom_date_edit = $dom_date_edit;

        return $this;
    }
}
