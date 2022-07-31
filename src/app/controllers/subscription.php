<?php
// src/controllers/add_comment.php
require_once('app/lib/database.php');
require_once('app/models/User.php');

function getViewSubscribe()
{
    require('app/views/subscription.php');
}
function addUser(array $input)
{
    $firstname = null;
    $lastname = null;
    $nickname = null;
    $email = null;
    $password = null;
    if (
        !empty($input['firstname']) && !empty($input['lastname']) && !empty($input['nickname']) && !empty($input['email'])
        && filter_var($input['email'], FILTER_VALIDATE_EMAIL) && !empty($input['password'])
    ) {
        $firstname = $input['firstname'];
        $lastname = $input['lastname'];
        $nickname = $input['nickname'];
        $email = $input['email'];
        $password = $input['password'];
    } else {
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $userRepository = new UserRepository();
    $userRepository->connection = new DatabaseConnection();
    $success = $userRepository->createUser($firstname, $lastname, $nickname, $email, $password);
    if (!$success) {
        throw new Exception('Erreur !');
    }

    // function profilpage()
    // {
    //     $userRepository = new UserRepository();
    //     $userRepository->connection = new DatabaseConnection();
    //     $users = $userRepository->getUser();
    //     require('app/views/profil.php');
    // }
}
