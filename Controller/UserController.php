<?php

class UserController
{
    public $userRepository;

    public function __construct($dbh)
    {
        $this->userRepository = new UserRepository($dbh);
    }


    public function logout()
    {
        session_destroy();
        Header('Location: /index');
    }


    public function infos()
    {
        $title = 'Espace utilisateur';
        $action = 'Bienvenu';
        $userFirstname = $_SESSION['user']->prenom;
        $userLastname = $_SESSION['user']->nom;
        include BASE_ROOT . 'View/header.html.php';
        include BASE_ROOT . 'View/user/user.html.php';
        include BASE_ROOT . 'View/footer.html';
    }
}
