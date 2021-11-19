<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member_test";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$addr=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birthday_POST['birthday'];

//更新的sql語法;
$sql_account="UPDATE `account` SET `mail`='$mail' WHERE `id`='$id'";
$sql_member="UPDATE `member` SET `address`='$addr',`mobile`='$mobile',`birthday`='$birthday' WHERE `id`='$id'";

//執行更新
// 用query 也可以，不過要想需要回傳(fetch)(拿回資料)嗎
$pdo->exec($sql_account);
$pdo->exec($sql_member);

//下面要記得戴上使用者的資料不然會錯誤
// header("location:../dashboard.php);  這是錯誤範例，沒有帶上使用者的資料

header("location:../dashboard.php);
?>