<?php
//setting header to json
header('Content-Type: application/json');

//database
//define('DB_HOST', '127.0.0.1');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '8f617f1a1274a0e41b9b391432e25021208ef1bfba0678b6');
//define('DB_NAME', 'db2');

//get connection
include_once '../dbconnect.php';

//$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$con){
	die("Connection failed: " . $con->error);
}

//query to get data from the table
$query = sprintf("SELECT password,count('password')as count FROM users GROUP by password");

//execute query
$result = $con->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);

?>

