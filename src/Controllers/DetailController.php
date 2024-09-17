<?php

namespace App\Controllers;

use App\Dao\UnlivreDAO;

class DetailController
{
    private UnlivreDAO $unlivreDao;
    private int $id_delivre;
    public function __construct(UnlivreDAO $dao, int $id_delivre){
        $this->unlivreDao = $dao;
        $this->id = $id_delivre;
    }
    public function detail(int $id_delivre) {
        // Fait appel au modèle afin de récupérer les données dans la BDD
        $livres = $this->unlivreDao->selectOne($id_delivre);
        // On test si un livre existe avec cette ID
        if (empty($livres)) {
            // Gestion d'une absence d'ID (redirection côté client)
            echo "<script>alert('ID du livre non défini.');</script>";
            echo "<script>window.location.replace('index.php?route=livre-list');</script>";
            exit; // Assurez-vous de terminer le script après la redirection
        }
        // Fait appel à la vue afin de renvoyé la page
        require_once __DIR__. '/../../views/livre/detail.php';

    }

}