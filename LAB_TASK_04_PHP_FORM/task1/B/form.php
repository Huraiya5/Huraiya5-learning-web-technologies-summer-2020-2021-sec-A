<?php

	if(isset($_REQUEST['Submit'])){

		$name = $_REQUEST['name'];

		if($name == ""){
			echo "invalid username!";
		}else{
			echo $name;
		}

	}else{
		echo 'invalid request';
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>page 1</title>
</head>
<body>
	<p><b>1.</p>
	<form method="post" action="
	form.php">
<h3>Name</h3><input type="text" name="name" value=""><br><br>
<input type="Submit" name=" Submit" value="Submit">
</form>
</body>
</html>