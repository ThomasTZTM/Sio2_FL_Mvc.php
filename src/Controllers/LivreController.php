<?php

namespace App\Controllers;

use App\Dao\LivreDAO;

class LivreController
{
    private livreDAO $livreDao;
    public function __construct(LivreDAO $dao){
        $this->livreDao = $dao;
    }
    public function list() {
        // Fait appel au modèle afin de récupérer les données dans la BDD
        $livres = $this->livreDao->selectAll();
        // Fait appel à la vue afin de renvoyé la page
        require_once __DIR__. '/../../views/livre/list.php';

    }

}