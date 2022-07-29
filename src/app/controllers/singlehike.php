<?php
// controllers/homepage.php
session_start();

require_once('app/lib/database.php');
require_once('app/models/Hikes.php');


function singleHike()
{
    $hikeRepository = new HikeRepository();
    $hikeRepository->connection = new DatabaseConnection();
    $hike = $hikeRepository->getSingleHike();

    // $createIdRepository = new CreateHikesRepository();
    // $createIdRepository->connection = new DatabaseConnection();
    // $id_user = $createIdRepository->getIdUserHike();
    // var_dump($id_user);
    require('app/views/singleHike.php');
}


// function singleIdUserHike()
// {
//     $createIdRepository = new CreateHikesRepository();
//     $createIdRepository->connection = new DatabaseConnection();
//     $id_user = $createIdRepository->getIdUserHike();
//     print_r($id_user);

//     require('app/views/singleHike.php');
// }

