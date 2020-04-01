<?php 
if (isset($_POST['submit'])) {
include '../config.php';
	$judul = $_POST['judul'];
	$icon = $_POST['icon'];
	$season = $_POST['season'];
	$episode = $_POST['episode'];
	$rilis_tanggal = $_POST['rilis_tanggal'];
	$kategori = $_POST['kategori'];
	$artis = $_POST['artis'];
	$deskripsi = $_POST['deskripsi'];
	$link = $_POST['link_film'];
	$follow_up = $_POST['follow_up'];
	$subtitle = $_POST['subtitle'];
// 	$tmp = $_FILES['subtitle']['tmp_name'];
	$views = 0;
	$now = time();
	
// 	$tmp2 = dirname(__FILE__) . "/../subtitle" . $subtitle;

// 	if (move_uploaded_file($tmp,$tmp2)) {
		$query = "INSERT INTO movies VALUES (NULL, '$icon','$judul','$season','$episode','$rilis_tanggal','$kategori','$artis','$deskripsi','$link','ok','$views','$follow_up',NULL,NULL)";
		$save = mysqli_query($config, $query);
		if($save)
		{
			mysqli_close($config);
			echo "<script>alert('Berhasil')</script>";
			echo "<script>window.location.href='../film.php'</script>";
		}else{
			mysqli_close($config);
			echo "<script>alert('Gagal')</script>";
			echo "<script>window.location.href='../film.php'</script>";
		}
// 	}
}