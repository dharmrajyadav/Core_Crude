<?php

		include('connection.php');
	

			$sql = "select * from country";
			$query = mysqli_query($conn,$sql);
						 $data = array();
			while($row = mysqli_fetch_array($query))
			{
					array_push($data, $row);
			}
				$fetch['fetchdata']=$data;
				echo json_encode($fetch);

?>