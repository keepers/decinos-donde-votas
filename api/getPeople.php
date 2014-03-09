<?php
header("content-type: application/json");
include('db.php');
if($con)
{
	if(isset($_REQUEST["province"]) || isset($_REQUEST["id"]))
	{
		mysqli_query($con,"set names 'utf8'");

		if(isset($_REQUEST["province"])){
			$province = $_REQUEST["province"];
			$query = "SELECT * FROM people WHERE place = '" . $province . "'";
		}
		else{
			$id = $_REQUEST["id"];
			$query = "SELECT * FROM people WHERE id = '" . $id . "'";
		}

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
		echo "[{\"status\":\"parametros incorrectos\"}]";
	}
}
else
{
	echo "[{\"status\":\"error db\"}]";
}
?>