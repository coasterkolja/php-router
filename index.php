<?php

ini_set("error_reporting", 0);

$uri = $_SERVER["REQUEST_URI"];
$uri = explode("/", $uri);
// print_r($uri);
array_splice($uri, 0, 4);
define("ABSOLUTE_PATH", "http://youtube.localhost/demo/router/4/");

$site = $_REQUEST["site"] = ($uri[0] == NULL ? "startseite" : $uri[0]);
$sites = ["startseite" => "home", "kontakt" => "contact", "anmelden" => "login", "fehler" => "error"];
$sitesWithParams = ["fehler" => "error"];

if($sitesWithParams[$site] != NULL) {
    if($site == "fehler") $_REQUEST["fehlercode"] = $uri[1] ?? 404;
}

include_once("assets/templates/head.php");
include_once("assets/templates/nav.php");

if($sites[$site] != NULL) include("sites/".$sites[$site].".php");
elseif(strlen($site) > 0) header("Location: ".ABSOLUTE_PATH."fehler/404");
else include("sites/home.php");

include_once("assets/templates/footer.php");