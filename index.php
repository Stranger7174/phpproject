<?php
include('commen.php');
print_r($_SESSION);

if ($_SESSION) {
  // echo "로그인 정보가 있습니다";
} else {
  echo "
  <script>
      location.href='login.php';
  </script>
  ";
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div style="background-color: black; padding: 30px; color: white;">
    <?php echo $_SESSION['id']."님 환영합니다."; ?>
    <button onclick="logout()">로그아웃</button>
    <button onclick="changinfo()">회원정보수정</button>
  </div>
</body>
</html>
<script>
  function changinfo() {
    location.href = 'changinfo.php';
  }
  function logout() {
    location.href = 'login.php';
  }
</script>
<?php
include('./view/uplode.html');

$sql = "get into board";
?>