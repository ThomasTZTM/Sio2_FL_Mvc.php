<?php

namespace App\Controllers;
use App\Entity\Livre;
use Doctrine\ORM\EntityManager;

class LivreController
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }
    public function list() {
        // Fait appel au modèle afin de récupérer les données dans la BDD
        $livreRepository = $this->entityManager->getRepository(Livre::class);
        $livres = $livreRepository->findAll();
        $livre_list = [];
        foreach ($livres as $livre) {
            $livres[] = $livre;
            // Fait appel à la vue afin de renvoyé la page
            require_once __DIR__ . '/../../views/livre/list.php';
        }
    }

    public function detail(int $id_delivre) {
        // Fait appel au modèle afin de récupérer les données dans la BDD
        $livreRepository = $this->entityManager->getRepository(Livre::class);
        $livre = $livreRepository->find($id_delivre); // SELECT * FROM posts WHERE id_post=1
        $livres = [];
        if ($livre) {
            $livres[] = $livre;
            // Fait appel à la vue afin de renvoyé la page
            require_once __DIR__. '/../../views/livre/detail.php';
        }else{
            echo "<script>alert('ID du livre non défini.');</script>";
            echo "<script>window.location.replace('index.php?route=livre-list');</script>";
            exit;
        }
    }

    public function ajout(){
        // Fait appel au modèle afin de récupérer les données dans la BDD
        $entityManager = require_once __DIR__ . "/../../config/bootstrap.php";
        require_once __DIR__. '/../../views/livre/ajout.php';
    }

}