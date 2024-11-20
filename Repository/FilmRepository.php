<?php

class FilmRepository
{
    public $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function getFilmList(): array // Envois un array de films
    {
        $sql = 'SELECT * FROM film';
        $stmt = $this->dbh->prepare($sql);

        $stmt->execute();
        return $stmt->fetchAll();
    }
}
