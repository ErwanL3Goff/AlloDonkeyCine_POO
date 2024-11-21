<?php

class FilmController
{
    public $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function list()
    {
        $title = "Film";
        $action = "Liste";
        $films = new FilmRepository($this->dbh);
        $films = $films->getFilmList();
        include 'View/header.html.php';
        include 'View/films/list.html.php';
        include 'View/footer.html';
    }

    public function add(): string
    {
        return "Add Author";
    }

    public function show(int $id)
    {
        $id = intval($id);
        $film = new FilmRepository($this->dbh);
        $film = $film->getFilm($id);
        $title = $film['titre'];
        $action = "Détail";
        include 'View/header.html.php';
        include 'View/films/show.html.php';
        include 'View/footer.html';
    }
}
