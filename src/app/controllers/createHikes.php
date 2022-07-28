<?php
require_once('app/lib/database.php');
// require_once('app/models/createHikes.php');
require_once('app/models/Hikes.php');



function getViewCreateHikes()
{
    require('app/views/createHikes.php');
}

function addHikes(array $input)
{


    $name_hikes = null;
    $distance = null;
    $duration = null;
    $elevation_gain = null;
    $description = null;
    if (!empty($input['name_hikes']) && !empty($input['distance']) && !empty($input['duration']) && !empty($input['elevation_gain']) && !empty($input['description'])) {
        $name_hikes = $input['name_hikes'];
        $distance = $input['distance'];
        $duration = $input['duration'];
        $elevation_gain = $input['elevation_gain'];
        $description = $input['description'];
    } else {
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $createHikesRepository = new CreateHikesRepository();
    $createHikesRepository->connection = new DatabaseConnection();
    $success = $createHikesRepository->createHikes($name_hikes, $distance, $duration, $elevation_gain, $description);
    if (!$success) {
        throw new Exception('Erreur !');
    }


    $createIdRepository = new CreateHikesRepository();
    $createIdRepository->connection = new DatabaseConnection();
    $idAdded = $createIdRepository->getIdHikes();
    // print_r($idAdded);  /////  TEST AFFICHAGE ID 

    if (!$idAdded) {
        throw new Exception('Erreur !');
    }
}
