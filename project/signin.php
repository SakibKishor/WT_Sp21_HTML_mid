<?php
	require_once "db_config.php";
	$uname= "";
	$pass= "";
	$err="";
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$uname= $_POST["username"];
		$pass= $_POST["pass"];
		$query= "select * from admin where Email='{$uname}' and Password='{$pass}' ";
		$result= get($query);
		
		
		if(count($result)>0)
		{
			session_start();
			$_SESSION["name"]=	$result[0]["Name"];
			$_SESSION["adminId"]=	$result[0]["Admin_Id"];
			
			
			$_SESSION["username"]= $uname;
			header("Location: dashboard.php");
		}
		else
		{
			$err= "*Username or password is invalid";
		}
		
		
	}
?>
	
<html>
	<head></head>
	<body>
	<fieldset>
	<legend align= "center"><h1 >Admin SignIn</h1></legend>
	<div align="center" >	
		<form action="" method="POST">
			Username: <input type="text" name ="username">    <br>
			Password: <input type="password" name="pass"> <br>
			<span> <?php echo $err; ?> </span>
			<input type ="submit" name= "submit" value= "login">
		</form>
	</div>
	</fieldset>
	</body>
</html>

