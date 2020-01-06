<?php
// nama koneksi : koneksi.php
// devoloper : M furqon

//koneksi database universitas kotli

$con=mysqli_connect("localhost","root","","universitas_kotlin");

//cek koneksi
if (mysqli_connect_errno()) {
    echo"Failed to connection to MYSQL : ".mysqli_connect_error();
}

?>