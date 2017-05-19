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
?>   