<?php

class RegisterController
{
    public $userRepository;

    public function __construct($dbh)
    {
        $this->userRepository = new UserRepository($dbh);
    }

    public function register()
    {
        $error = '';

        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $user = $this->userRepository->getUserByEmailAndPassword([
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);

            if ($user) {

                $_SESSION['user'] = $user;
                Header('Location: /index');
            } else {
                $error = 'Mauvaise';
            }
        }

        $title = "Register";
        $action = 'Nouvel utilisateur';

        include BASE_ROOT . 'View/header.html.php';
        include BASE_ROOT . 'View/register/register.html.php';
        include BASE_ROOT . 'View/footer.html';
    }
}
