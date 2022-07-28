<?php

require_once('app/lib/database.php');

class UserProfil
{
    public string $id;
    public string $firstname;
    public string $lastname;
    public string $nickname;
    public string $email;
    public string $password;
}

class UserProfilRepository
{
    public DatabaseConnection $connection;

    public function getUser(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT * FROM USERS WHERE nickname = '" . $_SESSION["nickname"] . "'"
        );
        $users = [];
        while (($row = $statement->fetch())) {
            $user = new User();
            $user->id = $row['id_user'];
            $user->firstname = $row['firstname'];
            $user->lastname = $row['lastname'];
            $user->nickname = $row['nickname'];
            $user->email = $row['email'];
            $user->password = $row['password'];

            $users[] = $user;
        }
        return $users;
    }
}
