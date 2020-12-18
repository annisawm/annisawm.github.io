<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	
	$connect = mysqli_connect($hostname, $username, $password);
	
	if($connect){
		echo "Koneksi ke MySQL berhasil <br>";		
	} else {
		echo "Koneksi ke MySQL gagal" . myqsli_connect_error();
	}
	
	$sql = "CREATE DATABASE prakwebdb";
	if(mysqli_query($connect, $sql)){
		echo "Database berhasil dibuat";		
	} else {
		echo "Database gagal dibuat <br>" . mysqli_error($connect);		
	}
	mysqli_close($connect);
?>