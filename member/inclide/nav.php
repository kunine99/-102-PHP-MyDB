<!-- 
<nav>
        <a href="index.php">回首頁</a>
        <a href="dashboard.php">會員中心</a>
        <a href="forgot.php">忘記密碼</a>
        <a href="edit_user.php">編輯會員資料</a>
        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
</nav> -->

<!-- if(登入成功){
會員中心的nav -->

<!-- <style>
        
</style>

<nav>
        <a href="index.php">回首頁</a>
        <a href="dashboard.php?user=<?=$_GET['user'];?>">會員中心</a>
        <a href="forgot.php?user=<?=$_GET['user'];?>">忘記密碼</a>
        <a href="edit_user.php?user=<?=$_GET['user'];?>">編輯會員資料</a>
        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
</nav> -->
<!-- }else -->


<?php
if(isset($_SESSION['user'])){
?>
  
  <style>
    .del{
            background:grey;
            color:#EEE;
            float:right;
    }

  </style>
<nav>
        <a href="index.php">回首頁</a>
        <a href="dashboard.php">會員中心</a>
        <a href="chang_pw.php">修改密碼</a>
        <a href="edit_user.php">編輯會員資料</a>
        <a href="logout.php">登出</a>
        <a class="del" href="./del_alert.php">刪除帳號</a>

</nav>
<?php  }else{  ?>
<nav>
        <a href="index.php">回首頁</a>
        <a href="forgot.php">忘記密碼</a>
        <a href="reg.php"><button>註冊新會員</button></a>    
</nav>
<?php }  ?>