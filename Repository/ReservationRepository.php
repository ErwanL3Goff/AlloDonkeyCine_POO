<?php

class ReservationRepository
{
    public $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    //Inner joint de seance et reservation pour écupérer les reservations de l'utilisateur
    public function checkUserReservation(): array
    {
        $sql = " SELECT 
    s.id AS seance_id, 
    s.date AS seance_date, 
    s.heureDebut AS seance_horaire, 
    r.id AS reservation_id, 
    r.id_user AS user_id, 
    f.id AS film_id, 
    f.titre AS film_titre, 
    f.duree AS film_duree 
FROM seance s
INNER JOIN reservation r ON s.id = r.ID_seance
INNER JOIN film f ON s.id_film = f.id
WHERE r.ID_user = :id";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $_SESSION['user']->id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
