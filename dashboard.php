<?php

include "API/check.php";
$page = "dashboard.php";

$user == 1 ? include "pages/superadmin/".$page : 
($user == 2 ? include "pages/admin/".$page : 
($user == 3 ? include "pages/subadmin/".$page : 
($user == 4 ? include "pages/user/".$page : "")));

?>