<?php

require_once('app/lib/database.php');

class User
{
    public string $firstname;
    public string $lastname;
    public string $nickname;
    public string $email;
    public string $password;
}

class UserRepository
{
    public DatabaseConnection $connection;

    public function createUser(string $firstname, string $lastname, string $nickname, string $email, string $password)
    {

        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO USERS(firstname, lastname,nickname,email,password) VALUES(?,?,?,?,?)'
        );

        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        $affectedLines = $statement->execute([$firstname, $lastname, $nickname, $email, $passwordHashed]);
        return ($affectedLines > 0);
    }

    public function getUser(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT * FROM USERS WHERE nickname = '" . $_SESSION["nickname"] . "'"
        );
        $users = [];
        while (($row = $statement->fetch())) {
            $user = new User();
            // $user->id = $row['id_user'];
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
