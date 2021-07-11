<?php 

	include 'connection.php';

	if ($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$mail = $_POST['mail'];
		$phone = $_POST['phn'];
		$sex = $_POST['sex'];
		$dob = $_POST['dob'];

		$query = "insert into user (name,password,mail,phone,gender,dob) values('$name','$password','$mail,'$phone','$sex','$dob');";

		$res = mysqli_query($conn,$query);

		if ($res) {
			echo "done";
		} else {
			echo "not done";
		}
	}


 ?>