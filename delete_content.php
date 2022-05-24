<?php
include("commen.php");

$no = $_GET['no'];
$sql = "delete from bord
        where no = $no";

$result = $conn -> query($sql);

if ($result) {
  echo "
    <script>
      alert('글삭제 완료');
      location.href = 'index.php';
    </script>
  ";
} else {
  echo "
  <script>
    alert('글 삭제실패');
    history.backe();
  </script>
  ";
}
?>