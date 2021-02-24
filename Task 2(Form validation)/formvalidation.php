<html>
	<head></head>
	<body>
		<?php
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$err_gender="";
			$biodata="";
			$err_bio="";
		
			if($_SERVER['REQUEST_METHOD']=="POST")
			{	
				if (empty($_POST["uname"]))
				{
					$err_uname="*Username Required";
				}
				else if(strlen($_POST["uname"])<6 )
				{
					$err_uname="*Username should be at least 6 characters";
				}
				else
				{
					$uname= $_POST["uname"];
				}
				
				if (empty($_POST["pass"]))
				{
					$err_password="*Password Required";
				}
				else
				{
					$password=$_POST["pass"];
				}
				
				if(isset($_POST["gender"]))
				{
					
				}
				else
				{
					$err_gender="*Gender required";
				}
				
				
				if (empty($_POST["bio"]))
				{
					$err_bio="*Biodata required";
				}
				else if(strlen($_POST["bio"])<10 )
				{
					$err_bio="*Biodata should be more than 10 words";
				}
				else
				{
					$biodata= $_POST["bio"];
				}
				
				
		
			}
		?>
	
	
		<form action="" method= "post">
			<table>
				<tr>
					<td> <span>Username</span> </td>
					<td> :<input type = "text" value="<?php echo $uname; ?>" name= "uname"> 
					<span> <?php echo $err_uname; ?> </span> </td>
				</tr>
				<tr>
					<td> <span>Password</span> </td>
					<td> :<input type = "password" value="<?php echo $password; ?>" name= "pass"> 
					<span> <?php echo $err_password; ?> </span> </td>
				</tr>
				<tr>
					<td> <span>Gender </span> </td>
					<td> :<input type = "radio" value="Male" name= "gender">Male  <input type = "radio" value="male" name="gender">Female 
					<span> <?php echo $err_gender; ?> </span> </td>
				</tr>
				<tr>
					<td> <span>Hobbies</span> </td>
					<td> :<input type= "checkbox" value="Movies" name= "hobbies[]">Movies <input type= "checkbox" value="Gaming" name= "hobbies[]" >Gaming </td>
				</tr>
				<tr>
					<td> <span>Profession</span> </td>
					<td> :<select name="profession">
						<Option>Teaching</Option>
						<Option>Acting</Option>
						<Option>Driving</Option>
						</select> 
					</td>
				</tr>
				<tr>
					<td> <span>Bio</span> </td>
					<td> :<textarea name="bio" value="<?php echo $biodata; ?>"  > </textarea> 
					<span> <?php echo $err_bio; ?> </span> </td></td>
				</tr>
				<tr>
					<td align= "center" colspan= "2"> <input type="submit" value="submit"> </td>
				</tr>
				
				
				
			</table>
		</form>
	</body>
</html>