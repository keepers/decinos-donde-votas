<?php
include('db.php');
if($con)
{

	$query = "SELECT distinct(`place`) FROM `people`";

	$result = mysqli_query($con,$query);

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