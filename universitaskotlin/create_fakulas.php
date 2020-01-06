<?php

include 'koneksi.php';

    $kodeFakultas = $_POST['kode_fakultas'];
    $namaFakultas = $_POST['nama_fakultas'];
    $pilihOrg = $_POST['pilih'];

if(!$kodeFakultas||!$namaFakultas){
    echo json_encode(array('message'=>'required filed is empety.'));
}else{
    $query=mysqli_query($con,"INSERT INTO fakultas VALUES('','$kodeFakultas','$namaFakultas','$pilihOrg')");

    if($query){
        echo json_encode(array('message'=>'fakultas data successfully added.'));
    }else{
        echo json_encode(array('message'=>'fakultas data Failid added.'));
    }
}

?>