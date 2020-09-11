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
        // session_start();
        // $row["username"]= $_SESSION['username'];
        // echo $row["username"]."hai";
		$sql="INSERT INTO requests (username,firstname,lastname,email,pno,addres,typ,quantity,resadd,city,zip) VALUES ('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['pno']."','".$_POST['addres']."','".$_POST['typ']."','".$_POST["quantity"]."','".$_POST["resadd"]."','".$_POST["city"]."','".$_POST["zip"]."')";
		if(mysqli_query($conn,$sql))
		{
			include("after2.php");
		} 
		else
		{
			echo "Error:".$sql."<br/>".mysqli_error($conn);
		}
		// mysqli_close($conn);
		?>
</body>
</html>