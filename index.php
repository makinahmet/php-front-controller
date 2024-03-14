<?php
$URI = $_SERVER['REQUEST_URI'];     //get the browser URL
$urlQueries = explode("/", $URI);   //explode the URL with / sign. This returns an array

//index 0 is null,
//index 1 is site base 
//index 2 is requested page
//index 3 is url first query
//index 4 is url second query and so on


?>