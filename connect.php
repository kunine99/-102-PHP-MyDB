<?php
$testtry="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($testtry,'root','');
//請求連我的資料庫

// $range=$_GET['id'];
$range=(isset($_GET['id']))?$_GET['id']:20;


// $sql="select * from `students` where `id` <30";
// $sql="select * from `students` where `id` < $range";
$sql="select * from `students` where `id`< $range";


$rows=$pdo->query($sql)->fetchAll();

//echo $rows
//print_r($rows)
//var_dump($rows)
// echo "<pre>";
// print_r($rows);
// var_dump([$rows]);
//var適用於所有的變數 dump是請印的意思
// echo "<pre>";

//上面的參數可以自己亂取，不要重複就好
//charset 字元籍
//$pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');




?>
<style>
    table{
        border: 3px double;
        border-collapse: collapse;
    }

    td {
        border: 1px solid black;
        padding: 5px 10px;
    }
    tr:nth-child(odd){
        background:lightgreen;
    }
    tr:nth-child(even){
        background:pink;
    }

</style>


<table>
    <tr>
        <td>學號</td>
        <td>座號</td>
        <td>姓名</td>
        <td>性別</td>
        <td>出生年月日</td>
        <td>畢業國中</td>
    </tr>


<?php
// foreach($rows as $row){
//     echo $row['unu_id']."-";
//     echo $row['seat_num']."-";
//     echo $row['name']."-";
//     echo $row['birthday']."-";
//     echo $row['seconday']."-";
// 每次出現只出現五個欄位
// 出現完換行
// }


foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row['uni_id']    . "</td>";
    echo "<td>" . $row['seat_num']  . "</td>";
    echo "<td>" . $row['name']      . "</td>";
if(mb_substr($row['national_id'],1,1)==1){
    echo "<td>男生</td>";
}else{
    echo "<td>女生</td>";

}
echo "<td>" . $row['birthday']  . "</td>";
echo "<td>" . $row['secondary'] . "</td>";
    echo "</tr>";}


    ?>
    </table>