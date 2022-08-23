<?php

ini_set("error_reporting", 0);

$site = $_REQUEST["site"] ?? "startseite";
$sites = [
    "startseite" => "home",
    "kontakt" => "contact",
    "anmelden" => "login",
    "fehler" => "error"
];

include_once("assets/templates/head.php");
include_once("assets/templates/nav.php");

if($sites[$site] != NULL) include("sites/".$sites[$site].".php");
elseif(strlen($site) > 0) header("Location: index.php?site=fehler&fehlercode=404");
else include("sites/home.php");

include_once("assets/templates/footer.php");