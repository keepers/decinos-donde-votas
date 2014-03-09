<?php
header("content-type: application/json");
include('db.php');
if($con)
{
	$query = "UPDATE visits SET counter = counter + 1 WHERE id = 1";

	$jsonResult = array();
	$result = mysqli_query($con,$query); 
	echo "[{\"status\":\"correcto\"}]";
	mysqli_close($con);
}
else
{
	echo "[{\"status\":\"error db\"}]";
}
?>