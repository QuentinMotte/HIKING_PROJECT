<?php
require_once('app/lib/database.php');
require_once('app/models/Hikes.php');
require_once('app/models/Tags.php');

// function getViewUpdateHikes()
// {
//     require('app/views/updateHike.php');
// }

function updateHikes()
{
    $updateHikesRepository = new HikeRepository();
    $updateHikesRepository->connection = new DatabaseConnection();
    $success = $updateHikesRepository->updateHike();
    if (!$success) {
        throw new Exception('Erreur !');
       
    }
}

function updateSingleHike()
{
    $hikeRepository = new HikeRepository();
    $hikeRepository->connection = new DatabaseConnection();
    $hike = $hikeRepository->getSingleHike();

    

    $tagRepository = new TagRepository();
    $tagRepository->connection = new DatabaseConnection();
    $tags = $tagRepository->getTags();
    require('app/views/updateHike.php');
}