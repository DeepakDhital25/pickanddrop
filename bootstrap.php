<?php

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
   "driver" => "mysql",
   "host" =>"127.0.0.1",
   "database" => "dhtl",
   "username" => "root",
   "password" => ""

   // "driver" => $_ENV['MYSQL_DRIVER'],
   // "host" =>$_ENV['MYSQL_HOST'],
   // "database" => $_ENV['MYSQL_DATABASE'],
   // "username" => $_ENV['MYSQL_USER'],
   // "password" => $_ENV['MYSQL_PASSWORD']
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();