<?php

$server="localhost";
$username="root";
$password="root";
$dbname="data1";

$conn= new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
	die ("Connection faild: " . $conn->connect_error);
}
echo 
'<script>
	alert("Connected successfully")
	</script>';


