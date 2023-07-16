<?php

if (!isset($_POST["teacher_name"])) {
  die("請依正常管道至此頁");
}

require_once("../db_connect.php");
$name = $_POST["teacher_name"];
$phone = $_POST["teacher_phone"];
$gender = $_POST["teacher_gender"];
$mail = $_POST["teacher_mail"];
// $qualification = $_POST["teacher_qualification"];
$experience = $_POST["teacher_experience"];
$specialty = $_POST["teacher_specialty"];
$now = date('Y-m-d H:i:s');

$teacher_qualification_arr = array();
$teacher_qualification_arr=$_POST["teacher_qualification"];
array_filter($teacher_qualification_arr);
$length = count($teacher_qualification_arr);
// var_dump($teacher_qualification_arr);

if($length>=1){
  $qualification_str = implode(", ", $teacher_qualification_arr);
}else{
  die ("請填入相關資訊");
}



$sql = "INSERT INTO coffseeker_teachers (teacher_name, teacher_phone, teacher_gender, teacher_mail,  teacher_experience, teacher_specialty, created_at,valid,teacher_qualification ) VALUES ('$name', '$phone', '$gender', '$mail',  '$experience','$specialty','$now', 1,'$qualification_str')";

$duplication = "SELECT * FROM coffseeker_teachers WHERE teacher_mail='$mail' OR teacher_phone='$phone'";

$result = mysqli_query($conn, $duplication);

if (mysqli_num_rows($result) > 0) {
  die("資料重複,請重新確認");
}


  if ($conn->query($sql) === TRUE) {
      $latestId = $conn->insert_id;
      echo "教師新增完成";
      echo '<a class="btn btn-info" href="teacher-list.php">回到首頁</a>';
} else {
      echo "新增失敗" . $conn->error;
}






$conn->close();
?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

