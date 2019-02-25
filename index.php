<?php

require 'vendor/autoload.php';

$database = require 'Core/Bootstrap.php';

use App\Core\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());


