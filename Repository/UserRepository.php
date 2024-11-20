<?php

class UserRepository
{
    public $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function getUserByEmailAndPassword(array $credentials): User|bool
    {
        $sql = 'SELECT * FROM user WHERE email = \'' . $credentials['email'] . '\' AND password = \'' . $credentials['password'] . '\'';
        $stmt = $this->dbh->prepare($sql);

        $stmt->execute();

        return $stmt->fetchObject(User::class);
    }

    public function insert(array $infos): bool
    {
        $SQL = "insert into user SET username ...";
        
        return false;
    }
}