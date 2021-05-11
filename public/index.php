<?php
require '../vendor/autoload.php';




$url = filter_input(INPUT_GET, '_url');
if ($url == '') {
    $url = '/';
}
//dump($url);

// instanciation d'un nouvel nouvel AltoRouter;
$router = new AltoRouter();

// récupération dans la super globale $_SERVER de la valeur 'BASE_URI' qui stocke la racine de l'url du site web
// Attention BASE_URI n'est pas toujours disponible en fonction des configurations d'apache (ici c'est le fichier .htaccess qui gère ceci)
$baseURI = $_SERVER['BASE_URI'];


// il faut que nous disions à altoRouter quelle est "l'url racine" du site web
$router->setBasePath($baseURI);

//création d'une route pour la home ;  il faut utiliser la méthode map d'altorouter pour configurer une route

$router->map(
    'GET', // il faut choisir la méthode qui est utilisée pour appeler la page
    '/', // quel est l'url à surveiller (à partir de la racine du site configurée auparavant)
    [
        'controllerName' => 'MainController', // quel controller doit être instancicié si la route est valide
        'actionName' => 'home' // quelle méthode il faut appeler si la route est valide
    ],
    'main-home'  // nom de la route (ça nous permettra de gérer ultérieurement des trucs cools)
);

// configuration de la route pour les categories
$router->map(
    'GET',

    '/catalog',
    [
        'controllerName' => 'CatalogController',
        'actionName' => 'catalog'
    ],
    'catalog-catalog'
);

//dump($router);

$match = $router->match();

//xdebug_break();

// si match ne vaut pas false ; ceci signifie qu'une route correspond (match) à l'url demandée
if($match !== false) {

    // dans l'index 'target' (arbitraire, fourni par altorouter), nous retrouvons la configuration que l'on avait définie pour la route courrante
    $routeData = $match['target'];

    $controllerName = 'OShop\Controllers\\'. $routeData['controllerName'];

    // instanciation d'un objet du type demandé (le type demandé est stocké dans la variable $controllerName)
    $controller = new $controllerName();

    // récupération du nom de la méthode à appeller
    $methodName = $routeData['actionName'];


    // récupération des variables capturées dans l'url par altorouter
    // $match['params'] est un peu comme $_GET
    $variables = $match['params'];

    // appel de la méthode "dynamiquement"
    // pour la home page c'est comme si nous faisions $controller->home();
    $controller->$methodName($variables);
}
else {
    echo "TODO page 404";
    echo __FILE__.':'.__LINE__; exit();
}




