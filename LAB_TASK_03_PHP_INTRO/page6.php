<?php
	$flag = 0;
	$find = "afrose";
	$arr = [1,2,"huraiya",3,5,"afrose"];
	foreach ($arr as $value) {
		if ($value == $find) {
			$flag = 1;
		}
	}
	if ($flag == 1) {
			echo "The element is:" . $find;
		}
		else{
			echo " element Not found";
		}
?>