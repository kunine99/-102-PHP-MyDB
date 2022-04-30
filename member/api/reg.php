<?php

//alt+ctrl 垂直選取




$account=$_POST['account'];
$password=$_POST['password'];
// $password=md5($_POST['password']);  這會讓密碼以亂碼的方式顯示
$mail=$_POST['mail'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

// echo $account;
$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";
//dname要輸入資料庫的名稱，像我是取member_test
//但我自己的東西壞掉了，所以改連老師的
//這邊是我們註冊新會員後，新的資料會連上這個資料庫會
$dsn="mysql:host=localhost;charset=utf8;dbname=member_test";
$pdo=new PDO($dsn,'root','');

// echo $sql_account;
// echo "<hr>";
// echo $sql_member;
// echo "<hr>";
// echo "<hr>";

/* echo $sql_account;
echo "<hr>";
echo $sql_member;
echo "<hr>";
echo "<hr>"; */

//執行寫入資料表的動作
$pdo->exec($sql_account);
// echo "<hr>";
$pdo->exec($sql_member);

header("location:../index.php");




?>