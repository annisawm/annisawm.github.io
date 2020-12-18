<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$query = "DELETE FROM product WHERE id='$id'";
	$result = mysqli_query($connect, $query);
	
	if($result){
		echo "Data Berhasil Dihapus";
?>
	<a href="homeCRUD.php">Lihat Data</a>
<?php
	} else {
		echo "Gagal update data" . mysqli_error($connect);
	 }
?>