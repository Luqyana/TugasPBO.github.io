<?php 

$koneksi = mysqli_connect("localhost","root","","tugas_crud");

// mysqli_connect_errno() berfungsi untuk memeriksa berhasil atau tidaknya koneksi
if (mysqli_connect_errno()){
    // mysqli_connection_error() berguna untuk menampilkan error yang terjadi di koneksi php dan mysqli
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>