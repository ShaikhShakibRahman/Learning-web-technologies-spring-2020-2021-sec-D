<?php

	
	if(isset($_POST['submit'])){

		$gender		= $_POST['Male'];
		$gender	 		= $_POST['Female'];
		$gender	 		= $_POST['Other'];
		

		if($gender == "" || $gender == "" || $gender == "" ){
			echo "null submission...";
		}else{
			echo $gender;
			echo $gender;
			echo $gender;
		}



	}else{
		echo "invalid request...";
	}
?>