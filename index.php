<?php

//require the general classes
require("classes/loader.php");
require("classes/basecontroller.php");
require("classes/basemodel.php");

//require the model classes
require("models/home.php");

//require the controller classes
require("controllers/home.php");

//create the controller and execute the action
$loader = new loader($_GET);
$controller = $loader->CreateController();
$controller->ExecuteAction();