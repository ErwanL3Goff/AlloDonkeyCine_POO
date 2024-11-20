<?php
class Seance
{
    public int $id;
    public film $film;
    public salle $salle;
    public string $heureDebut;


    function newSeance(film $film, salle $salle, string $heureDebut)
    {
        $this->film = $film;
        $this->salle = $salle;
        $this->heureDebut = $heureDebut;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function getSalle()
    {
        return $this->salle;
    }

    public function getHeureDebut()
    {
        return $this->heureDebut;
    }
}
