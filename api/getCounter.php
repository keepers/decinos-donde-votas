<?php
header("content-type: application/json");
include('db.php');
if($con)
{
	$query = "SELECT counter FROM visits WHERE id = 1";

	$jsonResult = array();
	if ($result = mysqli_query($con,$query)) 
	{
		while($row = $result->fetch_array(MYSQL_ASSOC)) 
		{
			$jsonResult[] = $row;
		}

		echo json_encode($jsonResult);
	}
	
	mysqli_close($con);
}
else
{
	echo "[{\"status\":\"error db\"}]";
}
?>