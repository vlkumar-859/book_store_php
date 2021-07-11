<?php 
	

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		include 'connection.php';

		$mail = $_POST['mail'];
		$pass = $_POST['pass'];

		$query = "select * from user where mail = '$mail' and password = '$pass'";

		$res = mysqli_query($conn,$query);

		if (mysqli_num_rows($res)==1)
		{
			echo "done";
		}
		else {
			echo 'not done';
		}

	}


 ?>