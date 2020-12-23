<?php

/**
 *  Load namespace to use "USE" keyword
 **/
require_once "vendor/autoload.php";

/**
 *  Load all config data
 **/
require_once("core/config.php");


use controllers\IndexController;

$obj = new IndexController();
$obj->index();