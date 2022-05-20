<?php
include('commen.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="view/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="./changinfook.php" method="post">
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" >
    <h1 class="h3 mb-3 fw-normal">회원정보수정</h1>

    <div class="form-floating">
      <input type="email" name="id" value="<?php echo $_SESSION['id'] ?>" class="form-control" id="floatingInput" placeholder='' readonly>
      <button onclick="checkid()" style="margin-bottom: 5px;" class="w-100 btn btn-lg btn-primary" type="submit">중복아이디 체크</button>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="prepassword" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">기존 비밀번호</label>
    </div>
    <div class="form-floating">
      <input type="password" name="afterpassword" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">바꿀 비밀번호</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button style="margin-bottom: 5px;" class="w-100 btn btn-lg btn-primary" type="submit">수정완료</button>
  </form>
  <button onclick="outmember()" style="margin-bottom: 5px;" class="w-100 btn btn-lg btn-danger" type="submit">탈퇴하기</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
</main>


    
  </body>
</html>
<script>
  function outmember() {
    var cheeckpw = prompt('비밀번호를 입력하세요');
    var sessionpw = '<?php echo $_SESSION['pw'] ?>';

    if (cheeckpw == sessionpw) {
      location.href = 'outmember.php';
    } else {
      alert('비밀번호가 일치하지 않습니다.');
    }
  }
  function checkid() {
    console.log(11);
  }
</script>
