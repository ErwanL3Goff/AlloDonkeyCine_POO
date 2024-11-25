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

    public function updatePassword($postUser)
    {
        if (!empty($postUser)) {
            if ($postUser['oldPassword'] == $_SESSION['user']->password) {
                $this->userRepository->updatePassword(['password' => $postUser['newPassword'], 'id' => $_SESSION['user']->id]);
            }
        }
    }

    public function infos()
    {
        if ($_POST) {
            $updateUser = $this->updatePassword($_POST);
            if ($updateUser) {
                echo "Modification effectuée";
            } else {
                $error = 'Changement non effectué';
            }
        }
        $title = 'Espace utilisateur';
        $action = 'Bienvenu';
        $userFirstname = $_SESSION['user']->prenom;
        $userLastname = $_SESSION['user']->nom;
        include BASE_ROOT . 'View/header.html.php';
        include BASE_ROOT . 'View/user/user.html.php';
        include BASE_ROOT . 'View/footer.html';
    }
}
