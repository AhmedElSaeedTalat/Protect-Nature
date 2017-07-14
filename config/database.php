<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();
$capsule->addConnection([
	 "driver" => 'mysql',
     "host" => 'localhost',
     "username" => "root",
     "password"=>'mysql',
     "database" => "Blog",
     "charset" => "utf8"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();