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

    require('app/views/singleHike.php');
}


function deleteSingleHike()
{
    $hikeRepository = new HikeRepository();
    $hikeRepository->connection = new DatabaseConnection();
    $hikeRepository->deleteHike();

    require('app/views/singleHike.php');
}