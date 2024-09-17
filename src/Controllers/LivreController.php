<?php

namespace App\Controllers;

use App\Dao\LivreDAO;

class LivreController
{
    // Lister l'ensemble des livre
    private \PDO $db;
    public function __construct(\PDO $db){
        $this->db = $db;
    }
    public function list() {
        // Fait appel au modèle afin de récupérer les données dans la BDD
        $livreDao = new LivreDAO($this->db);
        $livres = $livreDao->selectAll();
        // Fait appel à la vue afin de renvoyé la page
        require_once __DIR__. '/../../views/livre/list.php';

    }

}