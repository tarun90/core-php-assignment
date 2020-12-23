<?php

/**
 *  Load namespace to use "USE" keyword
 **/
require_once "vendor/autoload.php";

use controllers\IndexController;

$obj = new IndexController();
$obj->index();