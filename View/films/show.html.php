<div class="film-container2">
    <p>
    <h3>Titre: <?= $film['titre'] ?></h3>
    </p>
    <img src="../../view/images/<?= $film['picture'] ?> " class='film-image2' />
    <p>Description: <?= $film['description'] ?></p>
    <form action="reservation.php" method="post">
        <button type="submit" name="idFilmReservation" value="<?= $film['idfilm'] ?>" class="reservation-button">Réserver</button>
    </form>
</div>