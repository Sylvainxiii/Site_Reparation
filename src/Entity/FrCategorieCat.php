<?php

namespace App\Entity;

use App\Repository\FrCategorieCatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrCategorieCatRepository::class)]
class FrCategorieCat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $cat_nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cat_description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?FrDomaineDom $fk_dom_id = null;

    #[ORM\OneToMany(targetEntity: FrSousCategoriSca::class, mappedBy: 'fk_cat_id')]
    private Collection $frSousCategoriScas;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cat_date_edit = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cat_date_add = null;

    public function __construct()
    {
        $this->frSousCategoriScas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatNom(): ?string
    {
        return $this->cat_nom;
    }

    public function setCatNom(string $cat_nom): static
    {
        $this->cat_nom = $cat_nom;

        return $this;
    }

    public function getCatDescription(): ?string
    {
        return $this->cat_description;
    }

    public function setCatDescription(?string $cat_description): static
    {
        $this->cat_description = $cat_description;

        return $this;
    }

    public function getFkDomId(): ?FrDomaineDom
    {
        return $this->fk_dom_id;
    }

    public function setFkDomId(?FrDomaineDom $fk_dom_id): static
    {
        $this->fk_dom_id = $fk_dom_id;

        return $this;
    }

    /**
     * @return Collection<int, FrSousCategoriSca>
     */
    public function getFrSousCategoriScas(): Collection
    {
        return $this->frSousCategoriScas;
    }

    public function addFrSousCategoriSca(FrSousCategoriSca $frSousCategoriSca): static
    {
        if (!$this->frSousCategoriScas->contains($frSousCategoriSca)) {
            $this->frSousCategoriScas->add($frSousCategoriSca);
            $frSousCategoriSca->setFkCatId($this);
        }

        return $this;
    }

    public function removeFrSousCategoriSca(FrSousCategoriSca $frSousCategoriSca): static
    {
        if ($this->frSousCategoriScas->removeElement($frSousCategoriSca)) {
            // set the owning side to null (unless already changed)
            if ($frSousCategoriSca->getFkCatId() === $this) {
                $frSousCategoriSca->setFkCatId(null);
            }
        }

        return $this;
    }

    public function getCatDateEdit(): ?\DateTimeInterface
    {
        return $this->cat_date_edit;
    }

    public function setCatDateEdit(?\DateTimeInterface $cat_date_edit): static
    {
        $this->cat_date_edit = $cat_date_edit;

        return $this;
    }

    public function getCatDateAdd(): ?\DateTimeInterface
    {
        return $this->cat_date_add;
    }

    public function setCatDateAdd(?\DateTimeInterface $cat_date_add): static
    {
        $this->cat_date_add = $cat_date_add;

        return $this;
    }
}
