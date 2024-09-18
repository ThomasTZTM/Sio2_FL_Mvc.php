<?php
namespace App\Dao;
use App\Entity\Livre;
use \PDO;
class LivreDAO
{
    private \PDO $db;
    private int $iddulivre;
    /**
     * @param PDO $db
     * @param int $iddulivre
     */

    public function __construct(PDO $db, int $iddulivre)
    {
        $this->db = $db;
        $this->idlivre = $iddulivre;
    }
    // Cette méthode va envoyer la requete " SELECT * FROM Livre "
    // Retourner les enregistrement sous la forme d'un tableau d'objet de la classe livre = MAPPING

    public function selectAll() : array
    {
        $requete = $this->db->query("SELECT * FROM livre");
        $LivreBD = $requete->fetchAll(PDO::FETCH_ASSOC);
        //MAPPING relationnel vers objet
        $livres = [];
        foreach ($LivreBD as $unLivre) {

            $livre = new Livre(); // Constructeur par défaut

            $livre->setId($unLivre['id_livre']);
            $livre->setTitre($unLivre['titre_livre']);
            $livre->setNbPage($unLivre['nb_page_livre']);
            $livre->setAuteur($unLivre['auteur_livre']);

            $livres[] = $livre;
        }
        return $livres;
    }

    public function selectOne($iddulivre) : array
    {
        $requete = $this->db->query("SELECT * FROM livre WHERE id_livre = $iddulivre");
        $LivreBD = $requete->fetchAll(PDO::FETCH_ASSOC);
        //MAPPING relationnel vers objet
        $livres = [];
        $livre = new Livre(); // Constructeur par défaut

        foreach ($LivreBD as $unLivre) {

            $livre = new Livre(); // Constructeur par défaut

            $livre->setId($unLivre['id_livre']);
            $livre->setTitre($unLivre['titre_livre']);
            $livre->setNbPage($unLivre['nb_page_livre']);
            $livre->setAuteur($unLivre['auteur_livre']);

            $livres[] = $livre;
        }
        return $livres;
    }
}