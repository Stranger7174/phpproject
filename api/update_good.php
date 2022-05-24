<?php

$host = 'localhost';
$user = 'root';
$db = 'hyosoung2';

$conn = mysqli_connect($host, $user, null, $db);

$no = $_GET['no'];
$cancle = $_GET['cancle'];

$sql = "update bord set
good_count = good_count + $cancle
        where no = $no";

$result = $conn -> query($sql);

$sql_count = "select 
good_count from bord
              where no = $no";
$result_count = $conn -> query($sql_count);

$data = mysqli_fetch_assoc($result_count);
$countvalue = $data['good_count'];

if($data) {
  //중복
  echo json_encode(array('result' => $countvalue));
} else {
  //중복 아님
  echo json_encode(array('result' => 'n'));
}
?>