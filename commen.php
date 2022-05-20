<?php
//세션은 대개 사용자의 정보를 저장해서 필요한곳에 사용함
session_start();

$host = 'localhost';
$user = 'root';
$db = 'hyosoung2';

$conn = mysqli_connect($host, $user, '', $db);
?>