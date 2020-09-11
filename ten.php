<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
		$sername="localhost";
		$username="root";
		$pass="";
		$dbname="chatbot";

		$conn=mysqli_connect($sername,$username,$pass,$dbname);
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
		}
		$sql="update signup set password='".$_POST["password"]."' , firstname='".$_POST["firstname"]."' , lastname='".$_POST["password"]."' , email='".$_POST["email"]."' , pno='".$_POST["pno"]."', ano='".$_POST["ano"]."' , pan='".$_POST["password"]."' , gst='".$_POST["gst"]."', gender='".$_POST["gender"]."' ,  pol='".$_POST["pol"]."' where username='".$_POST["password"]."' ";
		if(mysqli_query($conn,$sql))
		{
			include("login.html");
		} 
		else
		{
			echo "Error:".$sql."<br/>".mysqli_error($conn);
		}
		mysqli_close($conn);
		?>
</body>
</html>