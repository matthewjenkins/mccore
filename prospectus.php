<?php

include_once('includes/coreDB.php');
include_once('includes/protect.php');

// Delete if the request is there
if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == "delete") {
  deleteProspectus($_REQUEST['id'], $_SESSION['userID']);
}

// Get domain and prospectus list
$domainList = getAllDomainsByDept($_SESSION['dept']);
$prospectusList = getProspectusList($_SESSION['userID']);

$pageTitle = "Prospectus";
$content = "prospectus.php";
$linkHighlights = array("home" => "", "domain" => "", "prospectus" => "current", "courses" => "", "stats" => "");

include_once('pages/master.php');
