<?php
$URI = $_SERVER['REQUEST_URI'];     //main URL
$urlQueries = explode("/", $URI);   //explode the URL with "/" sign. This returns an array.

/*
index 0 is empty
index 1 is base folder
index 2 is page name
index 3 is an action
index 4 is param1
index 5 is param2
index 6 is param3 and so on
*/

$domain = $urlQueries[1];
$requestedPage = $urlQueries[2];

isset($urlQueries[3]) ? $action = $urlQueries[3] : $action = "";
isset($urlQueries[4]) ? $param1 = $urlQueries[4] : $param1 = "";
isset($urlQueries[5]) ? $param2 = $urlQueries[5] : $param2 = "";
isset($urlQueries[6]) ? $param3 = $urlQueries[6] : $param3 = "";

/*TEST the requested pages and actions.
echo "RequestedPage = ".$requestedPage.".php <br />";
echo "Action = ".$action."<br />";
echo "Param1 = ".$Param1."<br />";
echo "Param2 = ".$Param2."<br />";
echo "Param3 = ".$Param3."<br />";
*/

$requestedFilePath = "..app/controllers/".$requestedPage."Controller.php";
if(file_exists($requestedFilePath))
{
    include("../app/controllers/".$requestedPage.".php");
}
else{
    include("../app/controllers/HomeController.php");
}
?>