<?php

namespace App\Entity;

use App\Repository\FrEtapeInterventionEtiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrEtapeInterventionEtiRepository::class)]
class FrEtapeInterventionEti
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $eti_titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $eti_description = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eti_duree = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $eti_photo_1 = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $eti_photo_2 = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $eti_photo_3 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrInterventionInt $fk_int_id = null;

    #[ORM\ManyToOne]
    private ?FrOutilsOut $fk_out_id = null;

    #[ORM\OneToMany(targetEntity: FrRemplacementRem::class, mappedBy: 'fk_eti_id')]
    private Collection $frRemplacementRems;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eti_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eti_date_edit = null;

    public function __construct()
    {
        $this->frRemplacementRems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtiTitre(): ?string
    {
        return $this->eti_titre;
    }

    public function setEtiTitre(string $eti_titre): static
    {
        $this->eti_titre = $eti_titre;

        return $this;
    }

    public function getEtiDescription(): ?string
    {
        return $this->eti_description;
    }

    public function setEtiDescription(?string $eti_description): static
    {
        $this->eti_description = $eti_description;

        return $this;
    }

    public function getEtiDuree(): ?\DateTimeInterface
    {
        return $this->eti_duree;
    }

    public function setEtiDuree(?\DateTimeInterface $eti_duree): static
    {
        $this->eti_duree = $eti_duree;

        return $this;
    }

    public function getEtiPhoto1(): ?string
    {
        return $this->eti_photo_1;
    }

    public function setEtiPhoto1(?string $eti_photo_1): static
    {
        $this->eti_photo_1 = $eti_photo_1;

        return $this;
    }

    public function getEtiPhoto2(): ?string
    {
        return $this->eti_photo_2;
    }

    public function setEtiPhoto2(?string $eti_photo_2): static
    {
        $this->eti_photo_2 = $eti_photo_2;

        return $this;
    }

    public function getEtiPhoto3(): ?string
    {
        return $this->eti_photo_3;
    }

    public function setEtiPhoto3(?string $eti_photo_3): static
    {
        $this->eti_photo_3 = $eti_photo_3;

        return $this;
    }

    public function getFkIntId(): ?FrInterventionInt
    {
        return $this->fk_int_id;
    }

    public function setFkIntId(?FrInterventionInt $fk_int_id): static
    {
        $this->fk_int_id = $fk_int_id;

        return $this;
    }

    public function getFkOutId(): ?FrOutilsOut
    {
        return $this->fk_out_id;
    }

    public function setFkOutId(?FrOutilsOut $fk_out_id): static
    {
        $this->fk_out_id = $fk_out_id;

        return $this;
    }

    /**
     * @return Collection<int, FrRemplacementRem>
     */
    public function getFrRemplacementRems(): Collection
    {
        return $this->frRemplacementRems;
    }

    public function addFrRemplacementRem(FrRemplacementRem $frRemplacementRem): static
    {
        if (!$this->frRemplacementRems->contains($frRemplacementRem)) {
            $this->frRemplacementRems->add($frRemplacementRem);
            $frRemplacementRem->setFkEtiId($this);
        }

        return $this;
    }

    public function removeFrRemplacementRem(FrRemplacementRem $frRemplacementRem): static
    {
        if ($this->frRemplacementRems->removeElement($frRemplacementRem)) {
            // set the owning side to null (unless already changed)
            if ($frRemplacementRem->getFkEtiId() === $this) {
                $frRemplacementRem->setFkEtiId(null);
            }
        }

        return $this;
    }

    public function getEtiDateAdd(): ?\DateTimeInterface
    {
        return $this->eti_date_add;
    }

    public function setEtiDateAdd(?\DateTimeInterface $eti_date_add): static
    {
        $this->eti_date_add = $eti_date_add;

        return $this;
    }

    public function getEtiDateEdit(): ?\DateTimeInterface
    {
        return $this->eti_date_edit;
    }

    public function setEtiDateEdit(?\DateTimeInterface $eti_date_edit): static
    {
        $this->eti_date_edit = $eti_date_edit;

        return $this;
    }
}
