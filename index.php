<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "function.php";
$wh = array('email'=>'admin@admin.com','pass'=>'admin');
$all = select('admins',$wh);
$user = admin_login('admin@admin.com','admin');
$r = khawar_sum(2,5);
var_dump($all);
?>