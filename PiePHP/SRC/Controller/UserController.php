<?php

namespace Controller;

use Core\Controller;
use Model\UserModel;


class UserController extends Controller
{
    function register()
    {
        // Va rendre la vue SRC/View/User/register.php
        $this->render('register');
    }

    function registerDB()
    {
        // Récupérer les paramètres de la requête POST
        $email = $this->request->post('email');
        $password =  $this->request->post('password');
        // Instancier le modèle UserModel
        $userModel = new UserModel(array('email' => $email, 'password' => $password));
        // Appeler la méthode save() du modèle pour enregistrer les données dans la base de données
        $userModel->Create();

        header('Location: /Projets_Git/PiePHP/PiePHP/user/login');
    }

    function login()
    {
        $this->render('login');
    }

    function loginDB()
    {
        session_start();

        // Récupérer les paramètres de la requête POST
        $email = $this->request->post('email');
        $password = $this->request->post('password');

        // Instancier le modèle UserModel
        $userModel = new UserModel(array('email' => $email, 'password' => $password));

        // Appeler la méthode save() du modèle pour enregistrer les données dans la base de données
        $userId = $userModel->LoginUser();

        if ($userId) {
            $_SESSION['id'] = $userId;
            echo "
                <script>
                    alert('✅ Connexion Validée ! ✅');
                    window.location.href='/Projets_Git/PiePHP/PiePHP/app/index';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('❎ Connexion Échouée ! ❎');
                    window.location.href='login';
                </script>
            ";
        }
    }

    function Update()
    {
        session_start();

        $email = $this->request->post('email');
        $password = $this->request->post('password');
        $userModel = new UserModel(array('email' => $email, 'password' => $password));
        $userModel->Update($_SESSION['id']);

        header('Location: /Projets_Git/PiePHP/PiePHP/user/RenderInfosUtilisateur');
    }

    function RenderUpdate()
    {
        $this->render('RenderUpdate');
    }

    function RenderDelete()
    {
        $this->render('RenderDelete');
    }

    function Delete()
    {
        session_start();

        $userModel = new UserModel();
        $userModel->Delete($_SESSION['id']);

        header('Location: /Projets_Git/PiePHP/PiePHP/user/login');
    }

    function RenderInfosTousUtilisateurs()
    {
        $this->render('RenderInfosTousUtilisateurs');
    }

    function voirTousUtilisateurs()
    {
        // Instancier le modèle UserModel
        $userModel = new UserModel();

        // Appeler la méthode save() du modèle pour enregistrer les données dans la base de données
        $userModel->InfosTousUtilisateurs();
    }

    function RenderInfosUtilisateur()
    {
        $this->render('RenderInfosUtilisateur');
    }

    function voirInfosUtilisateur()
    {
        // Instancier le modèle UserModel
        $userModel = new UserModel();

        // Appeler la méthode save() du modèle pour enregistrer les données dans la base de données
        $userModel->InfosUtilisateur($_SESSION['id']);
    }

    function logout()
    {
        session_start();
        session_destroy();
        header('Location: /Projets_Git/PiePHP/PiePHP/user/login');
    }
}