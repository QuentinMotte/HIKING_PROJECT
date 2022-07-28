<?php

session_start();

require_once('app/lib/database.php');
require_once('app/models/User.php');


function profilpage()
{
    $userProfilRepository = new UserProfilRepository();
    $userProfilRepository->connection = new DatabaseConnection();
    $users = $userProfilRepository->getUser();
    require('app/views/profil.php');
}
