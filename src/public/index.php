<?php
require_once('app/controllers/homepage.php');
require_once('app/controllers/subscription.php');
require_once('app/controllers/login.php');
require_once('app/controllers/createHikes.php');
require_once('app/controllers/success.php');
require_once('app/controllers/userProfil.php');
require_once('app/controllers/tags.php');
require_once('app/controllers/singleHike.php');
require_once('app/controllers/sortpage.php');
require_once('app/controllers/updateHike.php');
// require_once('app/views/subscription.php');
require_once 'core/Request.php';
require_once 'core/Router.php';
require_once 'app/routes.php';

//On utilise les méthodes statiques de la classe Request (pas besoin de l'instancier)
// $uri = Request::uri();
// $method = Request::method();

// // On instancie l'object $router
// $router = new Router();

// // On utilise la méthode register() pour stocker les routes du fichier routes.php dans
// // la propriété $routes du routeur.
// $router->register($routes);

// // On fait le routing en tant que tel : sur base de l'uri et de la méthode, on va
// // require le bon fichier.
// $router->direct($uri, $method);
try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'register') {
            getViewSubscribe();
            if ($_POST) {
                addUser($_POST);
            }
        } elseif ($_GET['action'] === 'login') {
            loginpage();
        } elseif ($_GET['action'] === 'createhikes') {
            // getViewCreateHikes();
            fetchTags();
            //  print_r(getIDHikes());

            if ($_POST) {
                addHikes($_POST);
            }
        } elseif ($_GET['action'] === 'success') {
            successpage();
        } elseif ($_GET['action'] === 'profil') {
            profilpage();
        } elseif ($_GET['action'] === 'logout') {
            logout();
        } elseif ($_GET['action'] === 'deleteHike') {
            deleteSingleHike();
        } elseif ($_GET['action'] === 'hike') {
            singleHike();
        } elseif ($_GET['action'] === 'sort') {
            sortPage();
        } elseif ($_GET['action'] === 'editHike') {
            // fetchUpdateTags();
            updateSingleHike();
            if ($_POST) {
                updateHikes($_POST);
            }
        } else {
            throw new Exception('Aucun identifiant ');
        }
    } else {
        homepage();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
