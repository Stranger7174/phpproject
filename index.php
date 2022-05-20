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


$sql = "select id, time, innertext from board";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .items {
    margin: 10px;
    border-top: 1px, solid gray;
    border-bottom: 1px, solid gray;
  }
  .itemid {

  }
  .itemtime {}
  .itemtext {}
</style>
<body>
  <div style="background-color: black; padding: 30px; color: white;">
    <?php echo $_SESSION['id']."님 환영합니다."; ?>
    <button onclick="logout()">로그아웃</button>
    <button onclick="changinfo()">회원정보수정</button>
  </div>
  <div id="contein" class="listdiv">
    <form id="uplodetext" class="" action="uplodeok.php" method="post">
      <input id="textcontent" class="textcontent" name="innertext" type="text">
      <button id="uplodebtn" onclick="innerContent()" type="submit">게시</button>
    </form>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="items">
        <span class="itemid"><?php echo $row['id'] ?></span>
        <span class="itemtime"><?php echo $row['time'] ?></span>
        <div class="itemtext"><?php echo $row['innertext'] ?></div>
      </div>
      <?php } ?>
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
// include('./view/uplode.html');

// $sql = "get into board";
?>