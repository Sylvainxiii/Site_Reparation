<?php

namespace App\Entity;

use App\Repository\FrRemplacementRemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrRemplacementRemRepository::class)]
class FrRemplacementRem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrPiecesDetacheesPid $fk_pid_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $rem_qte = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $rem_cause = null;

    #[ORM\ManyToOne(inversedBy: 'frRemplacementRems')]
    private ?FrEtapeInterventionEti $fk_eti_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFkPidId(): ?FrPiecesDetacheesPid
    {
        return $this->fk_pid_id;
    }

    public function setFkPidId(?FrPiecesDetacheesPid $fk_pid_id): static
    {
        $this->fk_pid_id = $fk_pid_id;

        return $this;
    }

    public function getRemQte(): ?int
    {
        return $this->rem_qte;
    }

    public function setRemQte(?int $rem_qte): static
    {
        $this->rem_qte = $rem_qte;

        return $this;
    }

    public function getRemCause(): ?string
    {
        return $this->rem_cause;
    }

    public function setRemCause(?string $rem_cause): static
    {
        $this->rem_cause = $rem_cause;

        return $this;
    }

    public function getFkEtiId(): ?FrEtapeInterventionEti
    {
        return $this->fk_eti_id;
    }

    public function setFkEtiId(?FrEtapeInterventionEti $fk_eti_id): static
    {
        $this->fk_eti_id = $fk_eti_id;

        return $this;
    }
}
