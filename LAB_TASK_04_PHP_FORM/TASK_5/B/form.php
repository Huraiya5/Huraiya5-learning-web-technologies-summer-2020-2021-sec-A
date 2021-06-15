
<?php

	if(isset($_REQUEST['submit'])){

		$degeree = $_REQUEST['degeree'];

		if($degeree == ""){
			echo "invalid username!";
		}else{
			echo $degeree;
		}

	}else{
		echo 'invalid request';
	}
	?>
	<html>
<head>
	<title>Degree input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC"> SSC
            <input type="checkbox" name="degree" value="HSC"> HSC
            <input type="checkbox" name="degree" value="Bsc"> Bsc
            <input type="checkbox" name="degree" value="Msc"> Msc 
            <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>