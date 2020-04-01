<?php

if (isset($_POST['submit'])) {
	$status = $_POST['setting'];
	include '../config.php';

	$query = mysqli_query($config, "UPDATE website_configuration SET maintenance='$status' WHERE id=1");
	if($query) {
		mysqli_close($config);
		echo "<script>window.location.href='../setting.php'</script>";
	}else{
		echo "<script>window.location.href='../setting.php'</script>";
	}
}