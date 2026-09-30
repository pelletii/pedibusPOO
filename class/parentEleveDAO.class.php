<?php
class ParentEleveDAO
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnexion();
    }



    public function findAll(): array
    {
        $req = $this->pdo->query('SELECT id, civilite, nomParent, prenomParent, adresseParent, telParent FROM ParentEleve ORDER BY nomParent');
        $lignes = $req->fetchAll(PDO::FETCH_ASSOC);

        $lesParents = [];
        foreach ($lignes as $ligne) {
            // Chaque ligne de la table devient un objet ParentEleve
            $lesParents[] = new ParentEleve($ligne['id'], $ligne['civilite'], $ligne['nomParent'],
                                            $ligne['prenomParent'], $ligne['adresseParent'], $ligne['telParent']);
        }
        return $lesParents;
    }
    public function insert(ParentEleve $p): void
    {
       $req = $this->pdo->prepare('INSERT INTO ParentEleve (civilite, nomParent, prenomParent, adresseParent, telParent)
                                VALUES (:civilite, :nom, :prenom, :adresse, :tel)');
    $req->bindValue(':civilite', $p->getCivilite(), PDO::PARAM_STR);
    $req->bindValue(':nom',      $p->getNomParent(), PDO::PARAM_STR);
    $req->bindValue(':prenom',   $p->getPrenomParent(), PDO::PARAM_STR);
    $req->bindValue(':adresse',  $p->getAdresseParent(), PDO::PARAM_STR);
    $req->bindValue(':tel',      $p->getTelParent(), PDO::PARAM_STR);
    $req->execute();

    $p->setId($this->pdo->lastInsertId());

    }
}