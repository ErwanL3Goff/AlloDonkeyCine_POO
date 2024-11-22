<?php


if (!empty($error)) {
    echo $error . "<br/>";
}

if (empty($_SESSION['user'])) {
?>


    Si vous n'avez pas de compter, créer en un ici. <a href="/register">Inscription</a>
<?php
} else {
    echo "Vous êtes déjà connecté";
}
