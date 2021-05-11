<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/catalog.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">



    <title>Document</title>
</head>


<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="fit-picture" src="http://placekitten.com/g/80/80" alt="LOGO"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active ">
                    <a class="text-light font-weight-bold nav-link" href="<?= $router->generate('main-home'); ?>">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="text-light font-weight-bold nav-link" href="<?= $router->generate('catalog-catalog'); ?>">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="text-light font-weight-bold nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main>
        <div id="main-container" class="container">
            <h1 class="display-1">LE TITRE
                <small class="d-none d-lg-block text-muted">With faded secondary text</small>
            </h1>