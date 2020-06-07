<?php

	include('connection.php');


	if(isset($_POST['submit']))
	{


		 $first_name = $_POST['first_name'];
		 $last_name = $_POST['last_name'];
		 $department = $_POST['department'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$district = $_POST['district'];
		 $user_name = $_POST['user_name'];
		 $user_password = $_POST['user_password'];
		 $confirm_password = $_POST['confirm_password'];
		 $email = $_POST['email'];
		 $contact_no = $_POST['contact_no'];

		 $sql = "select * from country where count_id = '$country'";
		$query = mysqli_query($conn,$sql);
		if($row=mysqli_fetch_array($query))
		{
			$country_name=$row['count_name'];
		}


		$sql = "select * from state where state_id = '$state'";
		$query = mysqli_query($conn,$sql);
		if($row=mysqli_fetch_array($query))
		{
			 $state_name=$row['state_name'];
		}

		$sql = "select * from district where state_id = '$state'";
		$query = mysqli_query($conn,$sql);
		if($row=mysqli_fetch_array($query))
		{
			 $district_name=$row['district_name'];
		}
		
		echo $query_insert = "insert into registration values(NULL,'$first_name','$last_name','$department','$country_name','$state_name','$district_name','$user_name','$user_password','$email','$contact_no')";
		$sql = mysqli_query($conn,$query_insert);
		if($sql)
		{
			echo "<script>
						alert('Registration Successfull');
						window.location.href='index.html';
						</script>";
		}
		else
		{
			echo mysqli_error($conn);
		}

		

	}









?>