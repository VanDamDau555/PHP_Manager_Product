<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
    $Database = 'Manager_Products';

	$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword, $Database);

    if ($conn){
        //echo ('Connect Successed');
    }
    else{
        //echo ('Connect not successed');
    }
?>