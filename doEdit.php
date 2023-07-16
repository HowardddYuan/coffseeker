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
    // header("location:teacher-list.php");
    echo '已成功編輯'. '<a href="teacher-list.php" class="btn btn-info">回到教師清單</a>';
}else{
    echo "修改資料錯誤" . $conn->error;
};

?>


<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>