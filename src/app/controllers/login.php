<?php
// controllers/homepage.php

require_once('app/lib/database.php');
require_once('app/models/Login.php');


function loginpage()
{
    $loginRepository = new LoginRepository();
    $loginRepository->connection = new DatabaseConnection();
    $success = $loginRepository->getLogin();
    require('app/views/login.php');
}

function logout()
{

    unset($_SESSION["loggedin"]);
    unset($_SESSION["id_user"]);
    unset($_SESSION["nickname"]);

    require('app/views/logout.php');
}
