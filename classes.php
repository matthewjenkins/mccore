<?php

include_once('includes/coreDB.php');

//TODO: Make sure they have permissions

$prospectusList = getProspectusList($_SESSION['userID']);

$pageTitle = "Your Classes";
$content = "classes.php";

include_once('pages/master.php');
