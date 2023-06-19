<?php

include("vendor/autoload.php");

use Faker\Factory as Faker;
use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\Mysql;
use Libs\Database\Usertable;

$faker = Faker::create();
echo $faker->email;
// echo $faker->name;
// echo $faker->address;

echo "<br>";

Auth::check();
HTTP::redirect();

$db = new Mysql;
$db->connect();

$table = new Usertable;
$table->insert();