<?php

function check_login($con)
{
	if(isset($_SESSION['bookingid']))
	{
		$bookingid =$_SESSION['bookingid'];
		$query="select * from bookingbook where bookingid = '$bookingid' limit 1";
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)	
		{
 			$user_data = mysqli_fetch_assoc($result);
 			return $user_data;

		}
	}

	header("Location:userbooksch.php");
	die;
}
