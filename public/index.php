<?php
$URI = $_SERVER['REQUEST_URI'];     //main URL
$urlQueries = explode("/", $URI);   //explode the URL with "/" sign. This returns an array.

/*
index 0 is empty
index 1 is base folder
index 2 is page name
index 3 is an action
index 4 is an action
index 5 is an action etc.
*/

if($urlQueries[2] == "")
{
    include("controllers/HomeController.php");
}
?>