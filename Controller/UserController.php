<?php

class UserController
{
    public $userRepository;

    public function __construct($dbh)
    {
        $this->userRepository = new UserRepository($dbh);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->userRepository->insert($_POST);

            $confirmation = "L'iutilisateur a bien été ajouté";

            include BASE_ROOT . 'View/header.html.php';
            include BASE_ROOT . 'View/user/add.html.php';
            include BASE_ROOT . 'View/footer.html';
        } else {
            $title = "Utilisateur";
            $action = 'Ajouter';
    
            include BASE_ROOT . 'View/header.html.php';
            include BASE_ROOT . 'View/user/add.html.php';
            include BASE_ROOT . 'View/footer.html';
        }
    }
}