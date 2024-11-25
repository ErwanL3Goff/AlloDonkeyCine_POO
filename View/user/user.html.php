<?php
if (!empty($error)) {
    echo $error . "<br/>";
}
if (!empty($_SESSION['user'])) {
?>
    <div class='user-container'>
        <!-- Section 1 : Informations utilisateur -->
        <section class="user-info">
            <div class="profile">
                <img src="profile.jpg" alt="Photo de profil de l'utilisateur" class='profile-pic'>
                <h1>Nom : <span>
                        <?= $userLastname ?>
                    </span></h1>
                <h2>Prénom : <span>
                        <?= $userFirstname ?>
                    </span></h2>
            </div>
        </section>

        <!-- Section 2 : Options utilisateur -->
        <section class="user-options">
            <h2>Options</h2>
            <form method="post" class="options-form">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="<?= $userLastname ?>">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="<?= $userFirstname ?>">
                </div>
                <div class="form-group">
                    <label for="newPassword">Nouveau mot de passe</label>
                    <input type="password" id="password" name="newPassword" placeholder="Modifier le mot de passe">
                </div>
                <div class="form-group">
                    <label for="oldPassword">Ancien mot de passe</label>
                    <input type="password" id="password" name="oldpassword" placeholder="Insérez votre ancien mot de passe afin de pouvoir le modifier">
                </div>
                <button type="submit" class="btn">Mettre à jour</button>
            </form>
            <a href="/user/logout" class="logout-link">Déconnexion</a>
        </section>
    <?php
} else {
    echo "Vous devez vous connecter";
}
