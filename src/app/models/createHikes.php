<?php

require_once('app/lib/database.php');

class createHikes
{
    public string $name_hikes;
    public string $distance;
    public string $duration;
    public string $elevation_gain;
    public string $description;
}

class CreateHikesRepository
{
    public DatabaseConnection $connection;

    public function createHikes(string $name_hikes, string $distance, string $duration, string $elevation_gain, string $description)
    {

        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO HIKES(name_hikes,date_creation,distance,duration,elevation_gain,description) VALUES(?,NOW(),?,?,?,?)'
        );



        $affectedLines = $statement->execute([$name_hikes, $distance, $duration, $elevation_gain, $description]);
        return ($affectedLines > 0);
    }
}
