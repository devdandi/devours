<?php 

include '../config.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$hapus = mysqli_query($config, "DELETE FROM movies WHERE id='$id'");
	if ($hapus) {
		mysqli_close($config);
		echo "<script>alert('Berhasil')</script>";
		echo "<script>window.location.href='../film.php'</script>";
	}
}