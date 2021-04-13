<?php
	require_once "db_config.php";
	
	$name="";
	$err_name="";
	
	$password="";
	$err_password="";
	
	$cpass="";
	$err_cpass="";
	
	$email="";
	$err_email="";
	
	$address="";
	$err_address="";
	
	$number="";
	$err_number="";
	
	
	$hasError=false;
	session_start();
	$addedby = $_SESSION["adminId"];
	
	

	if($_SERVER['REQUEST_METHOD']=="POST")
	{	
		if (empty($_POST["name"]))
		{
			$err_name="*Name Required";
			$hasError=true;
		}
		else if(strlen($_POST["name"])<2 )
		{
			$err_name="*Name should be more than one characters";
			$hasError=true;
		}
		else
		{
			$name=htmlspecialchars( $_POST["name"]);
		}
		
		
		
		if(empty($_POST["email"]))
		{
			$err_email="*Email Required";
			$hasError=true;
		}
		else{
			$email=htmlspecialchars($_POST["email"]);
		}
		
		
		if (empty($_POST["pass"]))
		{
			$err_password="*Password Required";
			$hasError=true;
		}
		
		else if (ctype_alpha($_POST["pass"]))
		{
			$err_password="*Password should contain at least one numeric character";
			$hasError=true;
		}
		
		else if (ctype_lower($_POST["pass"]))
		{
			$err_password="*Password should contain at least one uppercase character";
			$hasError=true;
		}
		
		else if (ctype_upper($_POST["pass"]))
		{
			$err_password="*Password should contain at least one lowercase character";
			$hasError=true;
		}
		
		else if (ctype_alnum ($_POST["pass"]))
		{
			$err_password="*Password should contain at least one special character";
			$hasError=true;
		}
		
		else if (strlen($_POST["pass"])<8)
		{
			$err_password="*Password should contain at least 8 characters";
			$hasError=true;
		}
		
		else
		{
			$password=htmlspecialchars($_POST["pass"]);
		}
		
		
		if ($_POST["pass"]!=$_POST["cpass"])
		{
			$err_cpass="*Password does not match";
			$hasError=true;
		}
		else
		{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
		
		
		
		if(!ctype_digit($_POST["number"]))
		{
			$err_number="*Phone no should be all numbers";
			$hasError=true;
		}
		else
		{
			$number=htmlspecialchars($_POST["number"]);
		}
		
		
		if (empty($_POST["address"]))
		{
			$err_address="*Address Required";
			$hasError=true;
		}
		else if(strlen($_POST["address"])<5 )
		{
			$err_address="*Address Required";
			$hasError=true;
		}
		else
		{
			$address= htmlspecialchars($_POST["address"]);
		}
		
		
		// if (empty($_POST["addedby"]))
		// {
			// $err_addedby="*Employee id Required";
			// $hasError=true;
		// }
		// else{
			// $addedby= htmlspecialchars($_POST["addedby"]);
		// }
		
		
		if(!$hasError)
		{
			
			$query="INSERT INTO admin VALUES (NULL, '$name','$email','$password','$number','$address','$addedby')";
			if(!execute($query))
			{
				echo "New Admin Inserted";
			}
			else{
				echo "Can not insert new admin";
			}
			
		}
		
		

	}
?>

<html>
	<head></head>
	<body>
		
	
	<fieldset>
		<legend align= "center"><h1 >Add new admin</h1></legend>
		<form action="" method= "post">
			<table align= "center">
				<tr>
					<td> <span>Name</span> </td>
					<td> :<input type = "text" value="<?php echo $name;?>"  name= "name"> 
					<span> <?php echo $err_name; ?> </span> </td>
				</tr>
				
				<tr>
					<td> <span>Email</span> </td>
					<td> :<input type = "text" value= "<?php echo $email;?>" name= "email">
					<span> <?php echo $err_email; ?> </span> </td>
					
				</tr>
				<tr>
					<td> <span>Password</span> </td>
					<td> :<input type = "password" value="<?php echo $password; ?>" name= "pass"> 
					<span> <?php echo $err_password; ?> </span> </td>
				</tr>
				
				<tr>
					<td> <span>Confirm Password</span> </td>
					<td> :<input type = "password" value="<?php echo $cpass; ?>"  name= "cpass"> 
					<span> <?php echo $err_cpass; ?> </span> </td>
				</tr>
				
				<tr>
					<td> <span>Phone</span> </td>
					<td> :<input type = "text" placeholder="Number" value="<?php echo $number?>"  name= "number"    > 
						<span> <?php echo $err_number; ?> </span> </td> 
				
					
				</tr>
				
				
				<tr>
					<td> <span>Address</span> </td>
					<td> :<textarea name="address" value="<?php echo $address; ?>"  > </textarea> 
					<span> <?php echo $err_address; ?> </span> </td></td>
				</tr>
				
				
				<tr>
					<td align= "center" colspan= "2"> <input type="submit" value="Register"> </td>
				</tr>
				
				
				
				
			</table>
		</form>
	</fieldset>	
		
	</body>
</html>