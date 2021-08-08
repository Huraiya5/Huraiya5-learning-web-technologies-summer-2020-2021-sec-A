<?php 
session_start();
if(!isset($_COOKIE['cook']))
	{
		
		header('location:../view/login.php');
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>LoGGED IN DASHBOARD</title>

</head>
>
		<fieldset>
	
	<form method="post" action="../upload/fileupload.php" enctype="multipart/form-data">
	

					<a href="../view/addmember.php">Add Employee</a><br>
					

					<a href="../view/deletemember.php">Delete Employee</a><br>
					<a href="../view/deletestudent.php">search Employee</a><br>
					
</form>
</fieldset>

</body>
</html>
<?php

	}
	
?>