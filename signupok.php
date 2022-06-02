<?php
include ('commen.php');
// print_r($_POST);
// echo $_POST['email'];
// echo $_POST['password'];

$email = $_POST['email'];
$pacssword = $_POST['password'];

$sql = "insert into member set
      id = '$email',
      password = '$pacssword'
      ";
//conn으로 sql값을 넣어줌
echo $sql;
print($sql);
$result = $conn -> query($sql);
echo $result;

if ($result) {
  echo "
  <script>
    localhost.href = 'login.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert('회원가입에 실패했습니다');
    localhost.href = 'location.back()';
  </script>
  ";
}
?>