<?php

include_once('data.php');

if(isset($_REQUEST['username'])) {
  $result = logUserIn($_REQUEST['username'], $_REQUEST['password']);

  if($result['userID'] == -1) {
    $loginFailed = true;
  } else {
    $_SESSION['userID'] = $result['userID'];
    $_SESSION['canCreate'] = $result['create'];
    $_SESSION['username'] = $_REQUEST['username'];
    $loginFailed = false;
  }
} else if(isset($_REQUEST['logout'])) {
  $_SESSION['userID'] = -1;
  $_SESSION['username'] = "";
  $_SESSION['canCreate'] = 0;
} else {
  $_SESSION['userID'] = -1;
  $_SESSION['username'] = "";
  $_SESSION['canCreate'] = 0;
  $loginFailed = false;
}