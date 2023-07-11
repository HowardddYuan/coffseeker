<?php

if (!isset($_POST["teacher_name"])) {
    die("請依正常管道至此頁");
}

require_once("../db_connect.php");

$name = $_POST["teacher_name"];
$phone = $_POST["teacher_phone"];
$gender = $_POST["teacher_gender"];
$mail = $_POST["teacher_mail"];
$qualification = $_POST["teacher_qualification"];
$experience = $_POST["teacher_experience"];
$specialty = $_POST["teacher_specialty"];
$now = date('Y-m-d H:i:s');


$sql = "INSERT INTO coffseeker_teachers (teacher_name, teacher_phone, teacher_gender, teacher_mail, teacher_qualification, teacher_experience, teacher_specialty, created_at ) VALUES ('$name', '$phone', '$gender', '$mail', '$qualification', '$experience','$specialty','$now')";

if ($conn->query($sql) === TRUE) {
    $latestId = $conn->insert_id;
    echo "教師新增完成";
} else {
    echo "新增失敗" . $conn->error;
}

$conn->close();
