<?php

namespace Core;

use Core\Database;
use PDO;

class ORM
{
    private $ConnectDB;

    public function __construct()
    {
        $this->ConnectDB = Database::GetBDD();
    }

    public function Create($table, $fields)
    {
        $conn = $this->ConnectDB;

        // Extraire les clés et les valeurs des champs à insérer
        $keys = array_keys($fields);
        $values = array_values($fields);

        // Construire la requête SQL d'insertion
        $sql = "INSERT INTO $table (" . implode(",", $keys) . ") VALUES ('" . implode("','", $values) . "')";

        // Exécuter la requête SQL
        $conn->query($sql);
    }

    public function Update($table, $id, $fields)
    {
        $keys = array_keys($fields);
        $values = array_values($fields);
        $sql = "UPDATE $table SET " . implode('=?,', $keys) . "=? WHERE id=?";
        $values[] = $id;
        $stmt = $this->ConnectDB->prepare($sql);
        return $stmt->execute($values);
    }

    public function Delete($table, $id)
    {
        $conn = $this->ConnectDB;

        // Construire la requête SQL de suppression
        $sql = "DELETE FROM $table WHERE id = ?";

        // Préparer la requête SQL avec un paramètre d'id sécurisé pour éviter les injections SQL
        $stmt = $conn->prepare($sql);

        return $stmt->execute([$id]);
    }

    public function loginSave($table, $fields)
    {
        $conn = $this->ConnectDB;

        $query = "SELECT * FROM $table WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute($fields);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['id'] ?? null;
    }

    public function InfosTousUtilisateurs($table)
    {
        $conn = $this->ConnectDB;

        //On récupère les infos de la table 
        $prepareDB = $conn->prepare("SELECT * FROM $table");
        $prepareDB->execute();

        //On affiche les infos de la table
        $resultat = $prepareDB->fetchALL(PDO::FETCH_ASSOC);
        $keys = array_keys($resultat);

        for ($i = 0; $i < count($resultat); $i++) {
            $n = $i + 1;
            echo '<br>Compte n°' . $n . ' :<br>';

            foreach ($resultat[$keys[$i]] as $key => $value) {
                echo $key . ' : ' . $value . '<br>';
            }
            echo '<br>';
        }
    }

    public function InfosUtilisateur($table, $utilisateurId)
    {
        $conn = $this->ConnectDB;

        // On prépare la requête pour récupérer les infos de l'utilisateur spécifié
        $prepareDB = $conn->prepare("SELECT * FROM $table WHERE id = ?");
        $prepareDB->bindParam(1, $utilisateurId);
        $prepareDB->execute();

        // On récupère les infos de l'utilisateur
        $resultat = $prepareDB->fetch(PDO::FETCH_ASSOC);

        // Si l'utilisateur existe, on affiche ses infos
        if ($resultat) {
            foreach ($resultat as $key => $value) {
                echo $key . ' : ' . $value . '<br>';
            }
        } else {
            echo 'Utilisateur non trouvé.';
        }
    }
}