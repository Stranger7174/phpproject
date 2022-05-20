<?php
include('commen.php');

print_r($_POST);

$email = $_POST['id'];
$prepassword = $_POST['prepassword'];
$afterpassword = $_POST['afterpassword'];

$sql = "update member set
        password = '$afterpassword'
        where id = '$email'
        ";


$result = $conn -> query($sql);
if ($prepassword != $_SESSION['pw']) {
  echo "
  <script>
    alert('기존비밀번호가 일치하지 않습니다.');
  </script>
  ";
} else {
  if ($result) {
    session_destroy();
    echo "
    <script>
      alert('변경되었습니다.');
      location.href='login.php';
    </script>
    ";
  } else {
    echo "
    <script>
      alert('변경할 정보를 입력해주세요');
    </script>
    ";
  }
}
?>