<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bibliothèque : <?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="index">
                <img src="View/images/Logo.png" alt="Logo du site" class="logo">
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
            <a href="login.php">Connexion</a>
        </nav>
    </header>