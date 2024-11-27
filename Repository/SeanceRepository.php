<?php

class SeanceRepository
{
    public $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function getSeanceForReservation()
    {
        $query = $this->dbh->prepare("SELECT * FROM seance WHERE id = :id");
        $query->execute(['id' => $_GET['id']]);
        $seance = $query->fetch();
        return $seance;
    }
}
