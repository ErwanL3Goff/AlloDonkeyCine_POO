
<?php

if(!empty($reservations))
{
foreach ($reservations as $reservation) {
    echo '<p>Vous avez effectué une reservation pour:</p>
<p>' . $reservation['film_titre'] . ' la séance est le ' . $reservation['seance_date'] . ' à ' . $reservation['seance_horaire'] . '<br>
    Vous avez possédez' . $reservation['nbPlaces'] . ' place(s) pour ce film </p>';
}
}
else {
    echo '<p>Vous n\'avez aucune reservations de films pour le moment.</p>';
}