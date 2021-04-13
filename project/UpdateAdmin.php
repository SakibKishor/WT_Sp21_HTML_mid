<html>
	<head></head>
	<body>
		<?php
		
			require_once "db_config.php";
			$name="";
			$err_name="";
			
			$email="";
			$err_email="";
			
			$address="";
			$err_address="";
			
			$number="";
			$err_number="";
			
			$hasError=false;
			
			$uid= $_GET['id'];
			echo $uid;
			
			
		
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
				
				
				if (empty($_POST["addedby"]))
				{
					$err_addedby="*Employee id Required";
					$hasError=true;
				}
				else{
					$addedby= htmlspecialchars($_POST["addedby"]);
				}
				
				
				if(!$hasError)
				{
					$query="UPDATE admin SET Name='$name', Email ='$email', Phone ='$number', Address ='$address', Added by='$addedby'  WHERE Admin_Id= '$uid'" ;
					
					if(!execute($query))
					{
						echo " Admin Updated";
					}
					else{
						echo "Can not update admin";
					}
					
					
					
					
				}
				
				
		
			}
		?>
	
	<fieldset>
		<legend align= "center"><h1 >Update Admin</h1></legend>
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
					<td align= "center" colspan= "2"> <input type="submit" value="Update Admin"> </td>
				</tr>
				
				
				
				
			</table>
		</form>
	</fieldset>	
		
	</body>
</html>