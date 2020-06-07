<?php

include('connection.php');

$data = array();
$sql = "select * from registration";
$query = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{
	/*array_push($data,$row);*/
	$data[]=$row;
}
	$fetch['fetchdata']=$data;
	echo json_encode($fetch);
	//return json_encode($fetch);



?>