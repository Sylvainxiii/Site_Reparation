<?php

namespace App\Entity;

use App\Repository\FrUtilisateurUtiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrUtilisateurUtiRepository::class)]
class FrUtilisateurUti
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $uti_email = null;

    #[ORM\Column(length: 50)]
    private ?string $uti_password = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $uti_nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $uti_prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uti_naissance_date = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $uti_avatar = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uti_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uti_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtiEmail(): ?string
    {
        return $this->uti_email;
    }

    public function setUtiEmail(string $uti_email): static
    {
        $this->uti_email = $uti_email;

        return $this;
    }

    public function getUtiPassword(): ?string
    {
        return $this->uti_password;
    }

    public function setUtiPassword(string $uti_password): static
    {
        $this->uti_password = $uti_password;

        return $this;
    }

    public function getUtiNom(): ?string
    {
        return $this->uti_nom;
    }

    public function setUtiNom(?string $uti_nom): static
    {
        $this->uti_nom = $uti_nom;

        return $this;
    }

    public function getUtiPrenom(): ?string
    {
        return $this->uti_prenom;
    }

    public function setUtiPrenom(?string $uti_prenom): static
    {
        $this->uti_prenom = $uti_prenom;

        return $this;
    }

    public function getUtiNaissanceDate(): ?\DateTimeInterface
    {
        return $this->uti_naissance_date;
    }

    public function setUtiNaissanceDate(?\DateTimeInterface $uti_naissance_date): static
    {
        $this->uti_naissance_date = $uti_naissance_date;

        return $this;
    }

    public function getUtiAvatar(): ?string
    {
        return $this->uti_avatar;
    }

    public function setUtiAvatar(?string $uti_avatar): static
    {
        $this->uti_avatar = $uti_avatar;

        return $this;
    }

    public function getUtiDateAdd(): ?\DateTimeInterface
    {
        return $this->uti_date_add;
    }

    public function setUtiDateAdd(?\DateTimeInterface $uti_date_add): static
    {
        $this->uti_date_add = $uti_date_add;

        return $this;
    }

    public function getUtiDateEdit(): ?\DateTimeInterface
    {
        return $this->uti_date_edit;
    }

    public function setUtiDateEdit(?\DateTimeInterface $uti_date_edit): static
    {
        $this->uti_date_edit = $uti_date_edit;

        return $this;
    }
}
