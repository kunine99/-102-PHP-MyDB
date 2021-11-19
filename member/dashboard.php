<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./inclide/head.php";?>
    
</head>
<body>
 <?php include "./inclide/header.php";?>
 <?php include "./inclide/nav.php";?>
 <!-- 下面路徑打錯的話會員中心的上面那段會出不來 -->
 <?php include "./inclide/sidebar.php";?>
<div class="content">
<h3>會員中心</h3>

<?=$_GET['user'];?>歡迎你:<br>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member_test";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `account`,`member` WHERE `account`.`id`=`member`.`id` && `account`.`account`='{$_GET['user']}'";
$user=$pdo->query($sql)->fetch();


?>


個人資料:
<li>帳號:<?=$user['account'];?></li>
<li>地址:<?=$user['address'];?></li>
<li>電話:<?=$user['mobile'];?></li>
<li>mail:<?=$user['mail'];?></li>
<li>生日:<?=$user['birthday'];?></li>



</div>

 <?php include "./inclide/footer.php";?>
</body>
</html>