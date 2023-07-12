<?php

require_once("../db_connect.php");

$id = $_GET["teacher_id"];

$sql = "SELECT * FROM coffseeker_teachers WHERE teacher_id=$id";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// print_r($rows);



?>
<!doctype html>
<html lang="en">

<head>
  <title>教師資訊</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="py-2">

      <h2>教師資訊</h2>
      <table class="table table-bordered">
        <?php foreach ($rows as $row) : ?>
          <?php if ($row["teacher_id"]) : ?>
            <tr>
              <th>ID</th>
              <td><span id=""><?= $row["teacher_id"] ?></span></td>
            </tr>
            <tr>
              <th>姓名</th>
              <td><span id="name"><?= $row["teacher_name"] ?></span></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><span id="email"><?= $row["teacher_mail"] ?></span></td>
            </tr>
            <tr>
              <th>電話號碼</th>
              <td><span id="phone"><?= $row["teacher_phone"] ?></span></td>
            </tr>
            <tr>
              <th>教師資格</th>
              <td><span id="teacher_qualification"><?= $row["teacher_qualification"] ?></span></td>
            </tr>
            <tr>
              <th>教師年資</th>
              <td><span id="teacher_experience"><?= $row["teacher_experience"] ?></span></td>
            </tr>
            <tr>
              <th>教師專長</th>
              <td><span id="teacher_specialty"><?= $row["teacher_specialty"] ?></span></td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>

      </table>
      <div class="d-flex justify-content-end">

        <a class="btn btn-info me-3" href="teacher-list.php">回到教師清單</a>


        <a class="btn btn-info" type="submit" href="teacher-edit.php?teacher_id=<?= $row["teacher_id"] ?>">編輯教師資訊</a>
      </div>

    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>