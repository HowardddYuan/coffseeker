<?php

if (!isset($_POST["teacher_name"])) {
    die("請依正常管道至此頁");
}

require_once("../db_connect.php");

$gender=$_POST["teacher_gender"] ?? "male" ;

$name = $_POST["teacher_name"];
$phone = $_POST["teacher_phone"];
$gender = $_POST["teacher_gender"];
$mail = $_POST["teacher_mail"];
$qualification = $_POST["teacher_qualification"];
$experience = $_POST["teacher_experience"];
$specialty = $_POST["teacher_specialty"];
$now = date('Y-m-d H:i:s');


$sql = "INSERT INTO coffseeker_teachers (teacher_name, teacher_phone, teacher_gender, teacher_mail, teacher_qualification, teacher_experience, teacher_specialty, created_at,valid ) VALUES ('$name', '$phone', '$gender', '$mail', '$qualification', '$experience','$specialty','$now', 1)";

$duplication="SELECT * FROM coffseeker_teachers WHERE teacher_mail='$mail' OR teacher_phone='$phone'";

$result=mysqli_query($conn,$duplication);

if(mysqli_num_rows($result)>0){
    die ("資料重複,請重新確認");
}

if(empty($name)||empty($phone)||empty($gender)||empty($mail)||empty($qualification)||empty($experience)||empty($specialty)){
    echo '<div class="text-center" style="color: red;">請填寫所有必填欄位</div>';
}else{
    if ($conn->query($sql) === TRUE) {
        $latestId = $conn->insert_id;
        echo "教師新增完成";
    } else {
        echo "新增失敗" . $conn->error;
    }
}




$conn->close();
