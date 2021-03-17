<?php

require_once __DIR__ . '../vendor/autoload.php';
require "src/functions/helpers.php";

src\classes\Bind::bind('connection', src\models\Connection::connect());
