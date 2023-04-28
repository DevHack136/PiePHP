<?php

namespace Model;

use Core\ORM;

class UserModel
{
    private $table = 'users';
    private $fields;
    private $orm;

    public function __construct($fields = [])
    {
        $this->orm = new ORM();
        $this->fields = $fields;
    }

    // Méthode pour enregistrer les données dans la base de données
    public function Create()
    {
        $this->orm->Create($this->table, $this->fields);
    }

    public function Update($id)
    {
        $this->orm->Update($this->table, $id, $this->fields);
    }

    public function Delete($id)
    {
        $this->orm->Delete($this->table, $id);
    }

    // Méthode pour se connecter
    public function LoginUser()
    {
        return $this->orm->LoginSave($this->table, $this->fields);
    }

    // Une fois connecter méthode pour voir toutes les infos des utilisateurs dans la bdd
    public function InfosTousUtilisateurs()
    {
        return $this->orm->InfosTousUtilisateurs($this->table);
    }

    // Une fois connecter méthode pour voir toutes les infos de l'utilisateur dans la bdd
    public function InfosUtilisateur($id)
    {
        return $this->orm->InfosUtilisateur($this->table, $id);
    }
}