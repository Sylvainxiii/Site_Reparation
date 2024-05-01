<?php

namespace App\Entity;

use App\Repository\FrPiecesDetacheesPidRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrPiecesDetacheesPidRepository::class)]
class FrPiecesDetacheesPid
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $pid_reference = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $pid_marque = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $pid_description = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $pid_lien_achat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pid_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pid_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getPidReference(): ?string
    {
        return $this->pid_reference;
    }

    public function setPidReference(string $pid_reference): static
    {
        $this->pid_reference = $pid_reference;

        return $this;
    }

    public function getPidMarque(): ?string
    {
        return $this->pid_marque;
    }

    public function setPidMarque(?string $pid_marque): static
    {
        $this->pid_marque = $pid_marque;

        return $this;
    }

    public function getPidDescription(): ?string
    {
        return $this->pid_description;
    }

    public function setPidDescription(?string $pid_description): static
    {
        $this->pid_description = $pid_description;

        return $this;
    }

    public function getPidLienAchat(): ?string
    {
        return $this->pid_lien_achat;
    }

    public function setPidLienAchat(?string $pid_lien_achat): static
    {
        $this->pid_lien_achat = $pid_lien_achat;

        return $this;
    }

    public function getPidDateAdd(): ?\DateTimeInterface
    {
        return $this->pid_date_add;
    }

    public function setPidDateAdd(?\DateTimeInterface $pid_date_add): static
    {
        $this->pid_date_add = $pid_date_add;

        return $this;
    }

    public function getPidDateEdit(): ?\DateTimeInterface
    {
        return $this->pid_date_edit;
    }

    public function setPidDateEdit(?\DateTimeInterface $pid_date_edit): static
    {
        $this->pid_date_edit = $pid_date_edit;

        return $this;
    }
}
