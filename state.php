<?php

		include('connection.php');
	
			$id = $_POST['id'];
			

			$sql = "select * from state where count_id = '$id'";
			$query = mysqli_query($conn,$sql);
						 $data = array();
			while($row = mysqli_fetch_array($query))
			{
					array_push($data, $row);
			}
				$fetch['fetchdata']=$data;
				echo json_encode($fetch);

?>