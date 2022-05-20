<?php
header('Content-Type: text/html; charset=UTF-8');
include("../commen.php");

$id = $_GET['id'];

$sql = "select id from member
        where id = '$id'";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);


// echo json_encode($data);

if ($data) {
  //중복
  echo json_encode(array('result' => 'y'));
} else {
  //중복아님
  echo json_encode(array('result' => 'n'));
}
?>