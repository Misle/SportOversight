<?php
$con = mysql_connect('localhost','root','','eecmy');
if (empty($con)) {
 	echo mysql_error();
 } 
 $data = mysql_select_db("eecmy");
 if (empty($data)) {
 	echo mysql_error();
 }
?>