<?php

$id=$_POST["teacher_id"];
$name=$_POST["teacher_name"];
$phone=$_POST["teacher_phone"];
$gender=$_POST["teacher_gender"];
$mail=$_POST["teacher_mail"];
$qualification=$_POST["teacher_qualification"];
$experience=$_POST["teacher_experience"];
$specialty=$_POST["teacher_specialty"];
$imgFile=$_FILES["teacher_img"]["name"];
$path=("teacher-img/");


require_once("../db_connect.php");

$sql="UPDATE coffseeker_teachers SET teacher_name='$name', teacher_phone='$phone', teacher_gender='$gender', teacher_mail='$mail', teacher_qualification='$qualification', teacher_experience='$experience', teacher_specialty='$specialty',teacher_img='$imgFile' WHERE teacher_id=$id";

if($_FILES["teacher_img"]["error"]==0){
    if(file_exists($path . $imgFile)){
        $sqlImage="UPDATE coffseeker_teachers SET teacher_img='$imgFile' WHERE teacher_id=$id";
        if($conn->query($sqlImage) === TRUE){
            // header("location:teacher-list.php");
            
            echo '已成功編輯'. '<a href="teacher-list.php" class="btn btn-info">回到教師清單</a>';
        }else{
            echo "修改資料錯誤" . $conn->error;
        };
    } else {
        move_uploaded_file($_FILES["teacher_img"]["tmp_name"],$path . $imgFile);
        $sqlImage="UPDATE coffseeker_teachers SET teacher_img='$imgFile' WHERE teacher_id=$id";
        if($conn->query($sqlImage) === TRUE){
            // header("location:teacher-list.php");
            header("location : teacher-detail.php");
        }else{
            echo "修改資料錯誤" . $conn->error;
        };
    }
} else {
    var_dump($_FILES["teacher_img"]["error"]);
}



$conn->close();

?>


<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>