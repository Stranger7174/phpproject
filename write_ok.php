<?php 

include('commen.php');
$title = $_POST['title'];
$content = addslashes($_POST['content']);
$writer = $_SESSION['id'];
$insertTime = date("Y-m-d H:i:s");

$sql = "insert into bord set
        title = '$title',
        content = '$content',
        writer = '$writer',
        time = '$time'
        ";
echo $sql;
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