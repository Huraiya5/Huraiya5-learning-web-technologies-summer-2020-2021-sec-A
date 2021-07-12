<?php


	if(isset($_POST['submit'])){

		$name = $_REQUEST['name'];
		

		

				$conn = mysqli_connect('localhost', 'root', '', 'product_db');
			    $sql = " select* from products where name like '%$name'";
				$result = mysqli_query($conn, $sql);

				//header('location: ../VIEW/searchProduct.php');
			
		

	}	
?>