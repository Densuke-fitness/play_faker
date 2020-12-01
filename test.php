<?php
ini_set('display_errors', "On");
 
require_once 'vendor/fakerphp/faker/src/autoload.php';
 
$faker = Faker\Factory::create('ja_JP');
//フェイクデーター作成
for ($i = 0; $i < 50; $i++) {
  echo $faker->email . "<br>";
}