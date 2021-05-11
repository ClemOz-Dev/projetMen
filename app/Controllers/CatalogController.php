<?php

namespace OShop\Controllers;

class CatalogController
{

    public function catalog()
    {

        $this->show('catalog');
    }




    public function show($viewName, $viewVars = [])
    {
        // attention pas propre ! PHP va chercher la variable $router dans l'espace global
        global $router;

        //  // transformation des indexes du tableau $viewVars en tant que varibles
        //  $viewVars['baseURI'] = $_SERVER['REQUEST_URI'];
        //  extract($viewVars);



        require __DIR__ . '/../views/partials/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
