<?php
	require_once "db_config.php";
	$query= "select * from admin";
	$result= get($query);
?>

<fieldset>
	<legend align= "center"><h1 >All admin</h1></legend>
	<table align="center" border="1" style="border-collapse:collapse;">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Added by</th>
			<th>Operations</th>
		</tr>
		
	<?php
		foreach ($result as $row)
		{
			echo "<tr>";
			echo "<td>".$row["Admin_Id"]."</td>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["Email"]."</td>";
			echo "<td>".$row["Phone"]."</td>";
			echo "<td>".$row["Address"]."</td>";
			echo "<td>".$row["Added by"]."</td>";
			echo    "<td> 
						<a href='UpdateAdmin.php?id={$row['Admin_Id']}'> Edit</a> |
                        <a href='DeleteAdmin.php?id={$row['Admin_Id']}'> Delete </a>
					</td>";
			echo "</tr>";
			
			
		}
		
		
	?>
	</table>
</fieldset>