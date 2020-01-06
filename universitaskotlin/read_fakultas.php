<?php 

require_once 'koneksi.php';

$result = array();
$querry = mysqli_query($con,"SELECT * FROM fakultas ORDER BY id_fakultas DESC");

while($row = mysqli_fetch_assoc($querry)){
    $result[] = $row;
}
echo json_encode(array('result'=>$result));

?>