<?php
include "../connection.php";
session_start();


$p=$_POST['pol'];
$_SESSION['Policy_Num'] = $p;  //set the session array value


$sql = "select * from user_policy where Policy_Num = '$p'";  
$result = mysqli_query($conn,$sql);
?>