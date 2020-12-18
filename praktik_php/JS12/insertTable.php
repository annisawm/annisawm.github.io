<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "prakwebdb";
	
	$connect = mysqli_connect($hostname, $username, $password, $database);
	
	if($connect){
		echo "Koneksi ke MySQL berhasil <br>";		
	} else {
		echo "Koneksi ke MySQL gagal <br>" . myqsli_connect_error();
	}
	
	$sql = "INSERT INTO product(id, product_name, harga)
	VALUES (1, 'Pensil', 3000)";
	
	if(mysqli_query($connect, $sql)){
		echo "Data berhasil ditambahkan";		
	} else {
		echo "Data gagal ditambahkan <br>" . mysqli_error($connect);		
	}
	mysqli_close($connect);
?>