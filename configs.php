<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'gtc';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$con=$conn;
$domain=$_SERVER['HTTP_HOST'];
if ( mysqli_connect_errno() ) {	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>