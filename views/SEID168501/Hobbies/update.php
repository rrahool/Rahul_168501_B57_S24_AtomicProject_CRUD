<?php

require_once "../../../vendor/autoload.php";

use App\Hobbies\Hobbies;
use App\Utility\Utility;

$obj = new Hobbies();

$obj->setData($_POST);

$obj->update();

Utility::redirect("index.php");