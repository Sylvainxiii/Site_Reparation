<?php

namespace App\Entity;

use App\Repository\FrUtilisateurUtiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: FrUtilisateurUtiRepository::class)]
class FrUtilisateurUti implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $uti_nom = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $uti_prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uti_naissance_date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $uti_avatar = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uti_date_add = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $uti_date_edit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
