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