<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandesRepository::class)
 */
class Commandes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommande(): ?string
    {
        return $this->id_commande;
    }

    public function setIdCommande(string $id_commande): self
    {
        $this->id_commande = $id_commande;

        return $this;
    }
}
