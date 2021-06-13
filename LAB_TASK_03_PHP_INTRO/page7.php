<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="60%">
		<tr>
			<td width="20%">
<?php
$s =3;
 for($i=1;$i<=$s;$i++)
 {
 	for($j=1;$j<=$i;$j++)
 	{
 		echo"*";
 	}
 	echo"<br>";
 }
?>
</td>
	<td width="20%">
		<?php
$s =3;
 for($i=$s;$i>=1;$i--)
 {
 	for($j=1;$j<=$i;$j++)
 	{
 		echo $j;
 	}
 	echo"<br>";
 }
?>
	</td>
	<td width="20%">
				<?php  
 
					$alpha = range('A', 'Z'); 
					$k = 0; 
					$n = 2;
					for ($i = 0; $i <= $n; $i++)
					{
						for ($j = 0; $j <= $i; $j++)
						{
							echo $alpha[$k++]." ";
						}
						echo "<br>";
					}
				?>
			</td>
</tr>

</table>
</body>
</html>