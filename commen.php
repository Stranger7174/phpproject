<?php
// 세션은 대게 사용자의 정보를 저장해서 필요한 곳에 불러와 사용한다.
session_start();

$host = 'localhost';
$user = 'root';
$db = 'hyosoung2';

$conn = mysqli_connect($host, $user, null, $db);
?>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">효성</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">글목록</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="write.php">글작성</a>
        </li>
      </ul>      
      <b><?php echo $_SESSION["id"] . "님 환영합니다"?></b>
      <button onclick="myInfoUpdate()" class="btn btn-outline-success" type="submit" style="margin: 0 10 0 10;">정보수정</button>      
      <button onclick="logout()"class="btn btn-outline-success" type="button">로그아웃</button>
      
    </div>
  </div>
</nav>