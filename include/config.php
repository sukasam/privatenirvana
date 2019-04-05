<?php 
ob_start();
@session_start();
error_reporting(0);
$cookie_time = time() + (3600 * 24 * 15) ;
$s_title="Private Nirvana | ADMINISTRATOR CONTROL";
define("S_TITLE","privatenirvana");
define("S_DOMAIN","http://localhost/");
define("S_PATHS","privatenirvana/");
define("S_IMAGES","images/");
?>
