
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

//print_r($_REQUEST);
$name=$_REQUEST['name'];
//echo $name;

$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$sql="select* from products where name='$name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

	echo "<form method=POST action=><fieldset><legend> Delete Product</legend>
	<table>
	<tr>
	<td>
	Name: {$row['name']}
	</td>
	</tr>

	<tr>
	<td>
	Buying Price: {$row['buyingPrice']}
	</td>
	</tr>

	<tr>
	<td>
	Selling Price: {$row['sellingPrice']}
	</td>
	</tr>
	</table>
	<hr>
	<input type=submit name=submit value=Delete>
	</fieldset>
	</from>
	";
	//echo $row['name'];
	//echo $row['buyingPrice'];
	//echo $row['sellingPrice'];


//$conn = mysqli_connect('localhost', 'root', '', 'product_db');

//$sql = "delete from products where name='$name'"; 

//$result = mysqli_query($conn, $sql);



//header('location: ../VIEW/displayProduct.php');
?>

