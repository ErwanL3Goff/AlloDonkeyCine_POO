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
        $sql = 'SELECT * FROM utilisateur WHERE email = \'' . $credentials['email'] . '\' AND password = \'' . $credentials['password'] . '\'';
        $stmt = $this->dbh->prepare($sql);

        $stmt->execute();
        return $stmt->fetchObject(User::class);
    }

    public function addUser(array $infos): bool
    {
        $sql = 'SELECT * FROM utilisateur WHERE email = \'' . $infos['email'] . '\' AND password = \'' . $infos['password'] . '\'';
        $stmt = $this->dbh->prepare($sql);

        $stmt->execute();
        return $stmt->fetchObject(User::class);
    }
}
