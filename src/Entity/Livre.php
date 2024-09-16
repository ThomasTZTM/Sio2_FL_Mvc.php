<?php

namespace App\Entity;

// Cette classe représente une entite (table liée dans la BDD)
class Livre{
    private int $id;
    private string $titre;
    private int $nb_page;
    private string $auteur;

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
    public function getNbPage(): int
    {
        return $this->nb_page;
    }
    public function setNbPage(int $nb_page): void
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
