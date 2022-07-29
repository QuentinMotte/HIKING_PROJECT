<?php

require_once('app/lib/database.php');

class Hike
{
    public string $id;
    public string $name;
    public string $creationDate;
    public string $distance;
    public string $duration;
    public string $elevation;
    public string $description;
    public string $nickname;
    public string $iduser;
}

class HikeRepository
{
    public DatabaseConnection $connection;

    public function getHikes(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT * FROM HIKES INNER JOIN HIKESUSERS ON id_hikes = id_hike ORDER BY id_hikes desc "
        );
        $hikes = [];
        while (($row = $statement->fetch())) {
            $hike = new Hike();
            $hike->id = $row['id_hikes'];
            $hike->name = $row['name_hikes'];
            $hike->creationDate = $row['date_creation'];
            $hike->distance = $row['distance'];
            $hike->duration = $row['duration'];
            $hike->elevation = $row['elevation_gain'];
            $hike->description = $row['description'];
            $hike->iduser = $row['id_user'];
            //$hike->nickname = $row['nickname'];

            $hikes[] = $hike;
        }
        return $hikes;
    }

    public function getSingleHike(): Hike
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM HIKES WHERE id_hikes = " . $_GET['id']
            // "SELECT * FROM HIKES INNER JOIN HIKESUSERS ON id_hikes = id_hike WHERE id_hikes = " . $_GET['id']
        );


        $statement->execute();
            $row = $statement->fetch();
            $hike = new Hike();
            $hike->id = $row['id_hikes'];
            $hike->name = $row['name_hikes'];
            $hike->creationDate = $row['date_creation'];
            $hike->distance = $row['distance'];
            $hike->duration = $row['duration'];
            $hike->elevation = $row['elevation_gain'];
            $hike->description = $row['description'];
            // $hike->iduser = $row['id_user'];
            //$hike->nickname = $row['nickname'];
            return $hike;
    }

    public function getHikeTag(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT * FROM HIKES INNER JOIN HIKESTAGS ON id_hikes = id_hike WHERE id_tag =" . $_GET[ "id" ]
        );
       
        $hikes = [];
        while (($row = $statement->fetch())) {
            $hike = new Hike();
            $hike->id = $row['id_hikes'];
            $hike->name = $row['name_hikes'];
            $hike->creationDate = $row['date_creation'];
            $hike->distance = $row['distance'];
            $hike->duration = $row['duration'];
            $hike->elevation = $row['elevation_gain'];
            $hike->description = $row['description'];
            //$hike->nickname = $row['nickname'];

            $hikes[] = $hike;
        }
        return $hikes;
    }
}

class createHikes
{
    public string $name_hikes;
    public string $distance;
    public string $duration;
    public string $elevation_gain;
    public string $description;
}

class idHikes
{
    public int $id_user;
    public int $id_hikes;
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

    public function getIdHikes()
    {
        $satement1 = $this->connection->getConnection()->query(
            "SELECT MAX(id_hikes) FROM HIKES;"
        );

        $satement2 = $this->connection->getConnection()->query(
            "SELECT id_user FROM USERS WHERE nickname = '" . $_SESSION["nickname"] . "'"
        );

        $idHike = $satement1->fetch();
        $idUser = $satement2->fetch();

        $statement3 = $this->connection->getConnection()->prepare(
            'INSERT INTO HIKESUSERS(id_user,id_hike) VALUES(?,?)'
        );

        $affectedID = $statement3->execute([$idUser[0], $idHike[0]]);

        return ($affectedID > 0);
    }  
}


// SELECT * FROM HIKES INNER JOIN HIKESTAGS ON id_hikes = id_hike WHERE id_tag = 3 ORDER BY id_hikes desc;