<?php 

include('common.php');
$title = $_POST['title'];
$content = addslashes($_POST['content']);
$writer = $_SESSION['email'];
$insertTime = date("Y-m-d H:i:s");

$sql = "insert into board set
        title = '$title',
        content = '$content',
        writer = '$writer',
        insertTime = '$insertTime'
        ";

$result = $conn -> query($sql);

if($result) {
  echo "
  <script>
    location.href='index.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert('글등록 실패.');
    location.back();
  </script>
  ";
}



?>