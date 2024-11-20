<?php

if (!empty($error)) {
    echo $error . "<br/>";
}

?>

<form method="post">
    <label for="email">
        E-mail
    </label>
    <input type="text" name="email" id="email"/>
    <label for="password">
        Mot de passe
    </label>
    <input type="password" name="password" id="password"/>
    <br/><br/>
    <input type="submit" value="Connexion"/>
</form>