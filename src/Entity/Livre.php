<?php


///////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////// Configuration de l'entité POST /////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'livre')]
class Livre
{

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////// Configuration des attributs ////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    #[ORM\Id] // Clé primaire
    #[ORM\Column(name: "id_livre", type: 'integer')] // On dit ou ce trouve la clé primaire et le nom associer dans la BDD
    #[ORM\GeneratedValue]
    private int $id;


    #[ORM\Column(name: "titre_livre", type: 'string', length: 100, nullable: false)]
    private string $titre;


    #[ORM\Column(name: "nb_page_livre", type: "integer", nullable: false)]
    private string $nb_page;


    #[ORM\Column(name: "auteur_livre", type: 'string', length: 100, nullable: false)]
    private string $auteur;


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////// Configuration des Getters Setters //////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////



    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getNbPage(): string
    {
        return $this->nb_page;
    }

    public function setNbPage(string $nb_page): void
    {
        $this->nb_page = $nb_page;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }








}

