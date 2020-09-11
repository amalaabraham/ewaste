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
		$dbname="ewc";

		$conn=mysqli_connect($sername,$username,$pass,$dbname);
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
		}
		$sql="INSERT INTO signup (username,pass,firstname,lastname,email,pno,addres) VALUES ('".$_POST['username']."','".$_POST["pass"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["pno"]."','".$_POST["addres"]."')";
		if(mysqli_query($conn,$sql))
		{
			include("after1.php");
		} 
		else
		{
			echo "Error:".$sql."<br/>".mysqli_error($conn);
		}
		// mysqli_close($conn);
		?>
</body>
</html>