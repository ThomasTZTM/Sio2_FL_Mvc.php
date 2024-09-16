<?php

namespace App\Dao;

use PDO;

class livreDAO
{

    private \PDO $db;


    /**
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    // Cette méthode va envoyer la requete " SELECT * FROM Livre "
    // Retourner les enregistrement sous la forme d'un tableau d'objet de la classe livre = MAPPING
    public function selectAll() : array
    {
        $requete = $this->db->query("SELECT * FROM livre");
        $requete->fetchAll(PDO::FETCH_ASSOC);
        //MAPPING relationnel vers objet
        $livres = [];
        foreach ($requete->fetchAll() as $livre) {
            $livres[] = $livre;
        }
        return $livres;
    }

}