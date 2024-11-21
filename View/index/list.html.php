<div class='container'>
    <h1 class="title">Liste de films</h1>
    <div class="grid">
        <?php
        foreach ($films as $film) {
            echo "
        <div class='film-card'>
            <a href='film/show/{$film['id']}' class='film-link'>
                <img src='images/{$film['picture']}' alt='{$film['titre']}'class='film-image'>
                <h3 class='film-title'>{$film['titre']}</h3>
            <div class='film-details'>
                </a>
                <p class='film-description'>{$film['description']}</p>
                <p class='film-duration'><strong>Durée:</strong> {$film['duree']}</p>
            </div>
        </div>";
        }
        ?>
    </div>
</div>