<?php 

include('commen.php');

$no = $_GET['no'];

// echo $no;

//쿠키가 없을경우 실행
if (!isset($_COOKIE["bord{$no}"])) {
  // echo "쿠키없음";
  
  //조회수 카운트 증가
  $sql_u = "update bord
  set count = count + 1
  where no = '$no'
  ";

  $result_u = $conn -> query($sql_u);

  // 쿠키세팅
  setcookie("bord{$no}", is_string("bord{$no}"), time() + 10800);

  
} else {
  // echo "쿠키있음";
}

$sql = "select 
          title,
          content,
          writer,
          time,
          good_count,
          count
        from bord 
        where no = '$no'";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);

if($data) {
        
} else {    
  echo "
  <script>
  alert('비정상 접근')
  location.href='index.php';        
  </script>
  ";
}
?>
<script>
function getCookie(cookieName) {
//쿠키가 배열로 저장
let cookie = {};
//split: 배열나누기
document.cookie.split(';').forEach(function(el) {
  //key값이 일치하는 value저장
  let [key,value] = el.split('=');
  cookie[key.trim()] = value;
})
//쿠키 반환
return cookie[cookieName];
}
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<div style="margin: 10%; border:1px solid black;">
  제목<i id="good"class="bi bi-heart" onclick="good()"></i>
  <p>
  <?php echo $data['title'];?>
  </p>
  내용
  <pre onclick="setcookie()">
  <?php echo $data['content'];?>
  </pre>
  작성자
  <p>
  <?php echo $data['writer'];?>
  </p>
  작성시간
  <p>
  <?php echo $data['time'];?>
  </p>
  <p>
  <b>
  좋아요 : <label id="good_count"> <?php echo $data['good_count'];?> </label>
  조회수 : <?php echo $data['count'];?>
  </b>
</svg>
  </p>
  <?php if($data['writer'] == $_SESSION['id']) { ?>
  <button onclick="updateContent()">수정</button>
  <button onclick="deleteContent()">삭제</button>
  <?php } ?>
</div>

<script>
  var contentNo = <?php echo $no ?>;
  function updateContent() {
    location.href='update_content.php?no=' + <?php echo $no ?>;
  }
  function deleteContent() {
    location.href='delete_content.php?no=' + <?php echo $no ?>;
  }
  function good() {
    var className = document.querySelector('#good').className;
    if(className == 'bi bi-heart') {
      document.querySelector('#good').setAttribute('class', 'bi bi-heart-fill');
      document.querySelector('#good').style.color = 'red';
      var http = new XMLHttpRequest();
      http.onreadystatechange = function () {
        if(this.status == 200 && this.readyState == this.DONE) {
          console.log(http.response);
          if(JSON.parse(http.response)['result'] != 'n'){
            // 좋아요 갯수 최신화
            document.querySelector('#good_count').innerText = JSON.parse(http.response)['result'];
          } else {
            alert('실패');
          }
        }
      }
      
      var url = "http://localhost/phpProject/api/update_good.php?no=" + contentNo+ '&&cancle=+1';
      
      http.open('GET', url);
      http.send();
    }
    if(className == 'bi bi-heart-fill') {
      document.querySelector('#good').setAttribute('class', 'bi bi-heart');
      document.querySelector('#good').style.color = '';
      var http = new XMLHttpRequest();
      http.onreadystatechange = function () {
        console.log(http.response);
        if(this.status == 200 && this.readyState == this.DONE) {                            
          if(JSON.parse(http.response)['result'] != 'n'){
            // 좋아요 갯수 최신화
            document.querySelector('#good_count').innerText = JSON.parse(http.response)['result'];
          } else {
            alert('실패');
          }
        }
      }
        
      var url = "http://localhost/phpProject/api/update_good.php?no=" + contentNo + '&&cancle=-1';
        
      http.open('GET', url);
      http.send();
    }
  }
</script>