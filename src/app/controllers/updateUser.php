<?php

session_start();

require_once('app/lib/database.php');
require_once('app/models/User.php');

function getViewUpdateUser()
{
    require('app/views/updateUser.php');
}