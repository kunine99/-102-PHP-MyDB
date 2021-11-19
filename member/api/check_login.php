<?php

/* $account=$_POST['account'];
$password=$_POST['password']; */
// $password=md5($_POST[`password`]);   帳號顯示明碼

$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";
//echo $sql;
//SELECT * FROM `account` WHERE `account`='$_POST['account']' && `password`='$_POST['password']'
// 確認登入看的資料庫
$dsn="mysql:host=localhost;charset=utf8;dbname=member_test";
$pdo=new PDO($dsn,'root','');

/* echo "<br>";
$result=$pdo->query($sql);
var_dump($result);
echo "<br>"; */
$result=$pdo->query($sql)->fetchColumn();


//
if($result>0){

    
    header("location:../dashboard.php?user=".$_POST['account']);
    //header("location:../dashboard.php");
}else{
    header('location:../index.php?err=1');
}


// $result=$pdo->query($sql)
// 如果用fetch拿到的會是一筆資料，一維陣列
//result拿到的結果 是一句



?>