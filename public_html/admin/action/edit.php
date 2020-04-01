<?php
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$icon = $_POST['icon'];
	$season = $_POST['season'];
	$episode = $_POST['episode'];
	$tanggal_rilis = $_POST['tanggal_rilis'];
	$deskripsi = $_POST['deskripsi'];
	$kategori = $_POST['kategori'];
	$link_film = $_['link_film'];
	$subtitle = $_POST['subtitle'];
	$follow_up = $_POST['follow_up'];
	$artis = $_POST['artis'];

	include '../config.php';
	$save = mysqli_query($config, "UPDATE movies SET icon='$icon', judul='$judul', season='$season',episode='$episode',rilis_tanggal='$tanggal_rilis',kategori='$kategori',artis='$artis', deskripsi='$deskripsi',link='$link_film',subtile='$subtitle' WHERE id='$id' ");
	if ($save) {
		echo "<script>alert('Berhasil')</script>";
		echo "<script>window.location.href='../film.php'</script>";
	}else{
		echo "<script>alert('Gagal')</script>";
		echo "<script>window.location.href='../film.php'</script>";
	}
}