<?php
include('commen.php');

//id:세션에 있는 값으로 해결
$id = $_SESSION['id'];
$time = date("y-m-d H:i:s");
$innerText = addslashes($_POST['innertext']);


$sql = "insert into board set
        id = '$id',
        time = '$time',
        innertext = '$innerText'
        ";

$result = $conn -> query($sql);

if ($result) {
  echo "
  <script>
    location.href = 'index.php';
  </script>";
} else {
  echo "
  <script>
    alert('등록에 실패했습니다.');
    location.back();
  </script>";
}
?>