<?php


foreach ($films as $film) {
    echo "
<div class='film-item'>
    <a href='film.php?id={$film['id']}'>
        <img src='images/{$film['picture']}' alt='{$film['titre']}'>
        <h3>{$film['titre']}</h3>
    </a>
    <p>{$film['description']}</p>
    <p><strong>Durée:</strong> {$film['duree']}</p>
</div>";
}
