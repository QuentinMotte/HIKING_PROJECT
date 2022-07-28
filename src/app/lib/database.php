<?php

class DatabaseConnection
{
    public ?PDO $database = null;

    public function getConnection(): PDO
    {
        if ($this->database === null) {
            $this->database = new PDO('mysql:host=188.166.24.55;dbname=jepsen6-phplovers;charset=utf8', 'phplovers', 'rlTJtf3NUeHKIgGn');
        }

        return $this->database;
    }
}
