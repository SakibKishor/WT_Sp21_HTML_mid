<?php
	$uname="";
	$pass="";
	if ($_SERVER["REQUEST_METHOD"]== "POST")
	{
		$uname= $_POST["uname"];
		$pass = $_POST["pass"];
		
		#database connection
		$server="localhost";
		$user="root";
		$password="";
		$db="web tech";
		
		$conn= mysqli_connect($server,$user,$password,$db);
		$query="insert into user values(NULL,'$uname','$pass','user')";
		
		if(mysqli_query($conn, $query))
		{
			echo "User Inserted";	
		}
		else
		{
			echo "Can not insert user";
		}
	}

	
	/* if($conn)
		{ echo "Connected"; }
	else
		{ echo mysqli_connect_error(); }
	
	$query="insert into user values(NULL,'Nahid','234','user')";
	*/
?>
	
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			Username: <input type="text" name ="uname">    <br>
			Password: <input type="password" name="pass"> <br>
			<input type ="submit" name= "submit" value= "Register">
		</form>
	</body>
</html>
	

