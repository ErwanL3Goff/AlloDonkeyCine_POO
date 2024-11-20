<?php

class BookController
{
    public $bookRepository;

    public function __construct($dbh)
    {
        $this->bookRepository = new BookRepository($dbh);
    }

    public function list(): void
    {
        $books = $this->bookRepository->getBookList();

        $title = "Book";
        $action = "Liste";
        include '/Users/anis/donkeyschool/session-sep-2024/poo/library/View/header.html.php';
        include '/Users/anis/donkeyschool/session-sep-2024/poo/library/View/books/list.html.php';
        include '/Users/anis/donkeyschool/session-sep-2024/poo/library/View/footer.html';
    }

    public function add(): string
    {
        return "Add Book";
    }
}