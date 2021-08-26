<?php
session_start();

$host= 'sql109.byethost18.com';
$username= 'b18_15691628';
$password= 'logined142';
$db='b18_15691628_anasistem';

$baglan = mysql_connect($host, $username, $password) or die( mysql_error());
mysql_select_db( $db, $baglan);

mysql_query("SET CHARACTER SET utf8");
mysql_query("UTF NAMES 'utf8'");
?>