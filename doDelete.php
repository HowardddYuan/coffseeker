<?php

$id=$_GET["teacher_id"];

echo $id;

require_once("../db_connect.php");

$sql="UPDATE coffseeker_teachers SET valid=0 WHERE teacher_id='$id'";
// $conn->query($sql);

if($conn->query($sql)===TRUE){
    header("location: teacher-list.php");
}else{
    echo "資料刪除失敗" . $conn->error;
};