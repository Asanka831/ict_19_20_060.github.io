
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

if(isset($_GET["submit"]))
{
$name = $_GET['name'];
$email = $_GET['email'];
$Num = $_GET['Num'];
$subject = $_GET['subject'];
$message = $_GET['message'];


$sql =" insert into messages (name,con_nb,e_mail,subject,message) 
values('{$name}','{$Num}','{$email}','{$subject}','{$message}')";
$result=mysqli_query($conn,$sql);

if($conn->query($sql) == TRUE)
	{
echo 
	'<script>
	alert("New record created successfully")
	</script>';
	
}
	else{
	echo'<script>
	alert("errror")
	</script>';}
	




	}
$conn->close();
//}





 ?>