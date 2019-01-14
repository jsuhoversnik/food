<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 1/14/2019
 * Time: 10:24 AM
 */

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//create and instance of the Base class
$f3 = Base::instance();
//turn on fat free error reporting
$f3->set('DEBUG',3);

//define a default route
$f3->route('GET /', function(){
    //echo '<h1>My Favorite Foods</h1>';
    $view = new View();
    echo $view->render('views/home.html');
});

//Define a breakfast route
$f3->route('GET /breakfast', function(){
    $view = new View();
    echo $view->render('views/breakfast.html');
});

//Define a lunch route
$f3->route('GET /lunch', function(){
    $view = new View();
    echo $view->render('views/lunch.html');
});


//Define a pancake route
$f3->route('GET /breakfast/pancakes', function(){
    $view = new View();
    echo $view->render('views/pancakes.html');
});

//run fat free
$f3->run();