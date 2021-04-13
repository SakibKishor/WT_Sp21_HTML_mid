<?php
	require_once "db_config.php";
	session_start();
	if(!isset($_SESSION["name"]))
	{
		header("Location:signin.php");
	}
?>

<html>
	 <!--<?php
		// $uname= $_SESSION["username"];
		// $pass= $_SESSION["pass"];
		
		// $query= "select 'Name', 'Email' from admin where Email='$uname'  ";
		// $result= get($query);
		// echo "<pre>";
		// print_r($result);
		// echo "</pre>"
		?>-->
	<fieldset>
		<legend align= "center"><h1 >Welcome <?php echo $_SESSION["name"]; ?> </h1></legend>
		<div align="center">
		<a href ="CreateAdmin.php"> Add New Admin </a> &nbsp;  &nbsp;
		<a href ="AllAdmin.php"> All Admin </a>
		</div>
	</fieldset>	
</html>	