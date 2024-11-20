<?php

class IndexController
{
    private $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function list()
    {


        $title = 'Index';
        $action = '';
        $films = new IndexRepository($this->dbh);
        $films = $films->getFilmList();
        require 'View/header.html.php';
        require 'View/index/list.html.php';
        require 'View/footer.html';
    }
}
