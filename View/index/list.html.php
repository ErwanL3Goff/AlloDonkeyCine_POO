<div class='container'>

    <!-- Films en cours de diffusion -->
    <h2 class="title">Films en cours de diffusion</h2>
    <div class="grid">
        <?php
        foreach ($currentFilms as $film) {
            echo "
        <div class='film-card'>
            <a href='film/show/{$film['film_id']}' class='film-link'>
                <img src='view/images/{$film['film_picture']}' alt='{$film['film_titre']}'class='film-image'>
                <h3 class='film-title'>{$film['film_titre']}</h3>
            <div class='film-details'>
                </a>
                <p class='film-description'>{$film['film_description']}</p>
                <p class='film-duration'><strong>Durée:</strong> {$film['film_duree']}</p>
                <p><button type='form' >Reserver</p>
            </div>
        </div>";
        }
        ?>
    </div>

    <!-- Liste de films -->
    <h2 class="title">Liste de films</h2>
    <div class="grid">
        <?php
        foreach ($films as $film) {
            echo "
        <div class='film-card'>
            <a href='film/show/{$film['id']}' class='film-link'>
                <img src='view/images/{$film['picture']}' alt='{$film['titre']}'class='film-image'>
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