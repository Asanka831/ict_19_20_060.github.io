
<?php
if(isset($_POST["submit"]))

{

$name = $_POST['name'];
if(!preg_match("/^[a-zA-Z]*$/",$name))
	{	
	echo'<script>
	alert("only alphebetic and white spaces allowed")
	</script>';
	}

$email = $_POST['email'];
 if (!filter_var($email,FILTER_VALIDATE_EMAIL))
 	{
 	<script>
	alert("invalid email")
	</script>';
	}
$contactNum = $_POST['contactNum'];
	if (!preg_match ("/^[0-9]*$/",$contactNum))
	{	
	echo'<script>
	alert("only alphebetic and white spaces allowed")
	</script>';
	}
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql="INSERT INTO 'massages' ('contact_nb','name','e_mail','subject', 'messsage') VALUES ('$contactNum','$name','$email','$subject','$message')";
$result=mysql_query;
if($conn->query($sql) == TRUE)
	{
	
	echo '<script>
	alert("successfull")
	</script>';
	}
	
    }
	else{
	echo"Error:" .$sql .$conn->error;}
?>