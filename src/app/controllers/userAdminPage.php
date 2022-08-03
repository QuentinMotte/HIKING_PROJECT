<?php
// controllers/homepage.php
session_start();

require_once('app/lib/database.php');
require_once('app/models/User.php');



function userAdminPage()
{
    $userAdminProfilRepository = new UserAdminProfilRepository();
    $userAdminProfilRepository->connection = new DatabaseConnection();
    $usersProfil = $userAdminProfilRepository->getAllUsers();

    require('app/views/userAdminPage.php');
}
function deleteSingleUser()
{
    $userAdminProfilRepository = new UserAdminProfilRepository();
    $userAdminProfilRepository->connection = new DatabaseConnection();
    $userAdminProfilRepository->deleteUser();

    require('app/views/userAdminPage.php');
}