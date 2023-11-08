<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
    $Database = 'products';

	$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword, $Database);

    if ($conn){
        //echo ('Connect Successed');
    }
    else{
        //echo ('Connect not successed');
    }
?>