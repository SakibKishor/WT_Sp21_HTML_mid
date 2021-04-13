<html>
	<head></head>
	<body>
		<?php
			require_once "db_config.php";
			
			$did= $_GET['id'];
			
			
			$query= "DELETE FROM admin WHERE Admin_Id= $did";
			if(!execute($query))
			{
				echo " Admin Deleted";
				header("AllAdmin.php");
			}
			else{
				echo "Can not delete admin";
			}

		?>
		
	</body>
</html>