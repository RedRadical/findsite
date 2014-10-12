<?php
/* load app */
require 'app/bootstrap.php';

// register Slim auto-loader
\Slim\Slim::registerAutoloader();

// init app
$app = New \SlimController\Slim(array(
    'templates.path'             =>  ABSPATH . '/FindSite/View',
    'Controller.class_prefix'    => '\\FindSite\\Controller',
    'Controller.class_suffix'   => 'Controller',
    'Controller.method_suffix'   => 'Action',
    'Controller.template_suffix' => 'php'
));

// add content type middleware, so the JSON request will be parsed automatically
$app->add(new \Slim\Middleware\ContentTypes());

// add session middleware
$app->add(new \Slim\Middleware\SessionCookie(array(
    'expires' => '60 minutes',
    'path' => '/',
    'domain' => null,
    'secure' => false,
    'httponly' => false,
    'name' => 'slim_session',
    'secret' => 'flS3p4PCRD',
    'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));

$app->addRoutes(array(
    '/'            => 'Home:index',
    '/agent'      => 'Agent:index',
    '/site'       => 'Site:index',
    '/site/list' => 'Site:list',
    '/site/detail/:id'  => 'Site:detail',
    '/user'       => 'User:index'
));

/* init error handler*/
$errorHandler = new \FindSite\Infrastructure\Handler\ErrorHandler($app);
$errorHandler->register();

$app->run();