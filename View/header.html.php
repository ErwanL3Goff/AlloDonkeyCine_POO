<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bibliothèque : <?php echo $title; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="index.php">
                <img src="images/Logo.png" alt="Logo du site" class="logo">
            </a>
        </div>
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $action; ?></h2>
        <style>
            .Bleach {
                color: white;
            }
        </style>
        <h2 class="Bleach">AlloDokeyCine</h2>
        <nav>
            <a href="index">Accueil</a>
            <a href="reservation.php">Mes Réservations</a>
            <a href="account.php">Mon Compte</a>
            <?php if (isset($_SESSION['user'])) {
                echo '<a href="user/logout">Deconnexion</a>';
            } else {
                echo '<a href="login">Connexion</a>';
            } ?>

        </nav>
    </header>