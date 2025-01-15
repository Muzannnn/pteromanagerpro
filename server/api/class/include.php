<?php

session_start();
date_default_timezone_set('Europe/Paris');
include 'Config.php';
if($GLOBALS['devmode']){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}else{
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}
include 'Database.php';

$GLOBALS['DB'] = new Database($GLOBALS['mysql_host'], $GLOBALS['mysql_database'], $GLOBALS['mysql_username'], $GLOBALS['mysql_password']);

include 'GetConfig.php';
include 'Account.php';
include 'Security.php';
include 'CSRF.php';
include 'EmailSystem.php';
if($GLOBALS['csrf_active']){
    CSRF::CreateToken();
}

?>