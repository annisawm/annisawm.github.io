<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['price'];	
	$target_path = "gambar/";
    $target_path = $target_path . basename($_FILES['gambar']['name']);

    if (move_uploaded_file($_FILES['foto']['tmp_name'],  $_SERVER['DOCUMENT_ROOT'] . '/dasarWeb/praktik_php/JS12' . $target_path)) {      
        $sqlGet = "SELECT * FROM product WHERE id = '$id'";
        $result = mysqli_query($connect, $sqlGet);

    if (mysqli_num_rows($result) > 0) {
        $path = "";

        while ($row = mysqli_fetch_array($result)) {
        $path = $row['url_gambar'];
        }
        $exp = explode('/', $path);
        $filename = $exp[1];        
        unlink($_SERVER['DOCUMENT_ROOT'] . '/dasarWeb/praktik_php/JS12/gambar/' . $filename);
    }
    $sql = "UPDATE product SET nama_product='$nama', harga = '$harga', url-gambar = '$target_path' WHERE id = '$id'";    
    $result=mysqli_query($connect, $sql);

    if($result){
        echo "Data berhasil di update";
?>
    <a href="homeCRUD.php">Lihat data</a>
<?php
    } else {
        echo "Gagal update data" . mysqli_error($connect);
    }
    mysqli_close($connect);
    } else {
    echo "Coba lagi";
    }
?>