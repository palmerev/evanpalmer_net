<?php

require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set("America/Los_Angeles");

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
//
// $log->addWarning('Oh noes!');

$app = new \Slim\Slim();

$app->get('/', function() use($app){
  $app->render('index.html');
});

$app->get('/contact', function() use($app){
  $app->render('contact.html');
});

$app->run();

?>
