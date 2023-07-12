<?php

$id=$_POST["teacher_id"];
$name=$_POST["teacher_name"];
$phone=$_POST["teacher_phone"];
$gender=$_POST["teacher_gender"];
$mail=$_POST["teacher_mail"];
$qualification=$_POST["teacher_qualification"];
$experience=$_POST["teacher_experience"];
$specialty=$_POST["teacher_specialty"];


require_once("../db_connect.php");

$sql="UPDATE coffseeker_teachers SET teacher_name='$name', teacher_phone='$phone', teacher_gender='$gender', teacher_mail='$mail', teacher_qualification='$qualification', teacher_experience='$experience', teacher_specialty='$specialty' WHERE teacher_id=$id";

if($conn->query($sql)==TRUE){
    header("location:teacher-list.php");
}else{
    echo "修改資料錯誤" . $conn->error;
};
