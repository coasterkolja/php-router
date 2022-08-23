<?php

ini_set("error_reporting", 0);

$site = $_REQUEST["site"] ?? "home";
$sites = [
    "home",
    "contact",
    "login",
    "error"
];

include_once("assets/templates/head.php");
include_once("assets/templates/nav.php");

if(in_array($site, $sites)) include("sites/".$site.".php");
elseif(strlen($site) > 0) header("Location: index.php?site=error&fehlercode=404");
else include("sites/home.php");

include_once("assets/templates/footer.php");