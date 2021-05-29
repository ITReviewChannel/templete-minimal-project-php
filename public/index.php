<?php

require '../vendor/autoload.php';

$user = new \App\User();
$user->setName('Ivan');

echo $user->getName();
