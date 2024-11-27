Vous avez effectué une reservation pour: <br>

<?php

foreach ($reservations as $reservation) {
    echo $reservation['film_titre'] . ' la séance est le ' . $reservation['seance_date'] . ' à ' . $reservation['seance_horaire'] . '<br>';
}
