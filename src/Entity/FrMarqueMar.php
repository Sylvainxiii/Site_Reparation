<?php

namespace App\Entity;

use App\Repository\FrMarqueMarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FrMarqueMarRepository::class)]
class FrMarqueMar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $mar_id = null;

    #[ORM\Column(length: 50)]
    private ?string $mar_nom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarId(): ?int
    {
        return $this->mar_id;
    }

    public function setMarId(int $mar_id): static
    {
        $this->mar_id = $mar_id;

        return $this;
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
}
