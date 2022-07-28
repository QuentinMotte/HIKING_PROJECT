<?php

session_start();

require_once('app/lib/database.php');


function successpage()
{
    require('app/views/success.php');
}
