<?php
function importStyle($file){
	echo "<style>";
	echo file_get_contents($file);
	echo "</style>";
}
function importScript($file){
	echo "<script>";
	echo file_get_contents($file);
	echo "</script>";
}
$APP_URL = getenv('host_uri');
$API_URL = getenv('api_uri');

$login_url = '/auth/sign-in';
$register_url = '/auth/sign-up';
$form_url = '/site-query';
?>   