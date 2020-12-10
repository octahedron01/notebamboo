<?php
	$con = mysqli_connect("localhost","crud","qwerty2020","notebamboo");
	$result = mysqli_query($con, "SELECT pw, nickname FROM user where id='test'");.$_POST["id"]);

	$response = array();
	while($row = mysqli_fetch_array($result)){
		$response[] = $row;
	}
	echo "string";
	echo json_encode(array("response"=>$response));
	mysqli_close($con);
 ?>
