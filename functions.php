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
$APP_URL = 'https://web.tradefin.com';
$API_URL = 'https://api.tradefin.com';

$login_url = '/auth/sign-in';
$register_url = '/auth/sign-up';
$form_url = '/site-query';
?>   