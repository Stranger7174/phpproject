<?php 
include("commen.php");

$userno = $_SESSION['no'];
$sql = "delete from member 
        where no = '$userno'";

$result = $conn -> query($sql);

if ($result) {
  echo "
  <script>
    alert('탈퇴완료');
    location.href = 'login.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert ('탈퇴실패');
    history.back();
  </script>
  ";
}
?>