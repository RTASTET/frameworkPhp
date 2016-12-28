<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../app/config/dev.php'; // Config for development
//require __DIR__.'/../app/config/prod.php'; // Config for production
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';

$app->run();

/*
 * La balise de fin de code PHP ?> est volontairement omise à la fin du fichier index.php. 
 * C'est une bonne pratique pour les fichiers qui ne contiennent que du PHP. 
 * Elle permet d'éviter des problèmes lors d'inclusions de fichiers.
 */

