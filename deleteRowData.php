<?php

include('connection.php');

$rowId=$_POST["id"];

	$sql="delete from registration where id='$rowId'";
	$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo "sucessfull";
	}
	else
	{
		echo mysqli_error($conn);
	}



?>