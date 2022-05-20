<?php
include('commen.php');
require('index.php');
$id = $_GET['email'];
echo $id;
// $id = $_POST['id'];
// $time = date("y-m-d H:i:s");
// $innerText = addslashes($_POST['innertext']);


// $sql = "insert into board set
//         id = '$id',
//         time = '$time',
//         content = '$content'
//         ";

// $result = $conn -> query($sql);

// echo '$sql';
// if ($result) {
//   echo "<script>
//     location.href = 'index.php';
//   </script>";
// } else {
//   echo "<script>
//     alert('등록에 실패했습니다.');
//     location.back();
//   </script>";
// }
?>