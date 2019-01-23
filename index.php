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
$f3->route('GET /', function($f3){

    //save variables
    $f3->set('username','jshmo');
    $f3->set ('password',sha1('Password01'));
    $f3->set('title','Working with Templates');
    $f3->set('temp',67);
    $f3->set('color','purple');
    $f3->set('radius',10);
    $f3->set('fruits',array('apple','orange','banana'));

    $f3->set('bookmarks',array('cnn'=>'http://www.cnn.com',
                                'google'=>'http://www.google.com'));

    //load a template
    $template = new Template();
    echo $template ->render('views/info.html');
    //alternate syntax
    //echo Template::instance()->render('views/info.html');

    //echo '<h1>My Favorite Foods</h1>';
    //$view = new View();
    //echo $view->render('views/home.html');
});

//Define a breakfast route
$f3->route('GET /Breakfast', function(){
    $view = new View();
    echo $view->render('views/breakfast.html');
});

//Define a lunch route
$f3->route('GET /Lunch', function(){
    $view = new View();
    echo $view->render('views/lunch.html');
});

//Define a lunch route
$f3->route('GET /dinner', function(){
    $view = new View();
    echo $view->render('views/dinner.html');
});


//Define a pancake route
$f3->route('GET /breakfast/pancakes', function(){
    $view = new View();
    echo $view->render('views/pancakes.html');
});

//Define dinner food routes
$f3->route('GET /dinner/burgers', function(){
    $view = new View();
    echo $view->render('views/burgers.html');
});
$f3->route('GET /dinner/tacos', function(){
    $view = new View();
    echo $view->render('views/tacos.html');
});
$f3->route('GET /dinner/teriyaki', function(){
    $view = new View();
    echo $view->render('views/teriyaki.html');
});

//run fat free
$f3->run();