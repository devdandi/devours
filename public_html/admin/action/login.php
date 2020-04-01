<?php

if (isset($_POST['submit'])) {
	include '../config.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	$check = mysqli_query($config, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	if (mysqli_num_rows($check) > 0) {
		session_start();
		$_SESSION['email'] = $email;
		mysqli_close($config);
		echo "<script>window.location.href='../index.php'</script>";
	}else{
		echo "<script>window.location.href='../login.php'</script>";

	}
}