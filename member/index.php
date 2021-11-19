<!-- <?php
// 要session之前要記得session start
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>泰山資訊網</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        nav{
            height:50px;
            box-shadow:0 2px 10px #ccc;
            display:block;
            width:100%;
            padding:10px 5px;
            text-align: right;
        }
        button{
            padding:5px 10px;
        }
        
    </style>
</head>
<body>
<!-- <nav>
        <?php

        // if(isset($_GET['err'])){
        //     echo "帳號或密碼錯誤，請重新登入";
        // }
        ?>
        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
    </nav> -->
    <nav>
        <?php

        if(isset($_GET['err'])){
            echo "帳號或密碼錯誤，請重新登入";
        }
        ?>
        <?php
        if(isset($_SESSION['user'])){
         ?>
            <a href="dashboard.php"><button>會員中心</button></a>
        <?php
        }else{   
       ?>
        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
        <?php
        }
        ?>
    </nav>
</body>
</html>



<!-- 如果有 我就顯示會員中心
如果沒有，我就顯示登入系統 -->