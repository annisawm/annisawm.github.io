<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['price'];
	$target_path = "gambar/";
	
$target_path = $target_path . basename($_FILES['gambar']['name']);
    if (move_uploaded_file($_FILES['gambar']['tmp_name'],  $_SERVER['DOCUMENT_ROOT'] . '/dasarWeb/praktik_php/JS12' . $target_path)) {
    $sql = "INSERT INTO product (id, product_name, harga, url_gambar) VALUES 
            ('$id', '$nama', '$harga', '$target_path')";
	
	if(mysqli_query($connect, $sql)){
		echo "Data berhasil diupdate";		
	} else {
		echo "Data gagal diupdate <br>" . mysqli_error($connect);		
	}
	mysqli_close($connect);
?>