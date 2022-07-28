<?php
// controllers/homepage.php
session_start();

require_once('app/lib/database.php');
require_once('app/models/Hikes.php');


function homepage()
{
    $hikeRepository = new HikeRepository();
    $hikeRepository->connection = new DatabaseConnection();
    $hikes = $hikeRepository->getHikes();
    require('app/views/homepage.php');
}
