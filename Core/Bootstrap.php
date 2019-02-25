<?php

use App\Core\App;

App::bind('config', require 'config.php');

$config = App::get('config');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = []){
    extract($data);
    return require "App/Views/{$name}.template.php";
}

function redirect($path){
    header("Location: /{$path}");
}
