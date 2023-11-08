<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$Database = 'users';

$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword, $Database);
if (!$conn) {
	//echo "Connection failed!";
}