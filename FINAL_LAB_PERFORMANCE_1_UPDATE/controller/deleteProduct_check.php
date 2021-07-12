<?php

	if(isset($_POST['submit'])){

		$name = $_REQUEST['name'];
		$buying = $_REQUEST['buying'];
		$selling = $_REQUEST['selling'];

		

				$conn = mysqli_connect('localhost', 'root', '', 'product_db');
			    $sql = "delete from products where name='$name'";
				$result = mysqli_query($conn, $sql);

				header('location: ../VIEW/displayProduct.php');
			
		

	}
?>