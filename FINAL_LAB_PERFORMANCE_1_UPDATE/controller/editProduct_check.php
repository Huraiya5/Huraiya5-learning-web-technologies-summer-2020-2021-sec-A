<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$buying = $_POST['buying'];
		$selling = $_POST['selling'];

		if($name == "" || $buying == "" || $selling == ""){
			echo "null submission...";
		}else{

				$conn = mysqli_connect('localhost', 'root', '', 'product_db');
				$sql = "update products set buyingPrice='$buying',sellingPrice='$selling' where name='$name'"; 
				$result = mysqli_query($conn, $sql);

				header('location: ../VIEW/displayProduct.php');
			
		}

	}
?>