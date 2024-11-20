<?php

class Reservation
{
    public int $id;
    public Utilisateur $user;
    public Seance $seance;

    function newReservation(Utilisateur $user, Seance $seance)
    {
        $this->user = $user;
        $this->seance = $seance;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getSeance()
    {
        return $this->seance;
    }
}
