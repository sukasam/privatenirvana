<?php 
ob_start();
@session_start();
$cookie_time = time() + (3600 * 24 * 15) ;
$s_title="X2 | ADMINISTRATOR CONTROL";
define("S_TITLE","X2");
define("S_DOMAIN","http://localhost/");
define("S_PATHS","x2/");
define("S_IMAGES","images/");
?>
