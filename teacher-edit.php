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
    <title>教師編輯</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <form action="doEdit.php" class="form" method="post">
        <h2>教師資訊</h2>
        <table class="table table-bordered">
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <th>ID</th>
                    <td><?= $row["teacher_id"] ?></td>
                </tr>
                <tr>
                    <th>姓名</th>
                    <td><input id="name" class="form-control" name="teacher_name" value="<?= $row["teacher_name"] ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input id="email" class="form-control" name="teacher_mail" value="<?= $row["teacher_mail"] ?>"></td>
                </tr>
                <tr>
                    <th>電話號碼</th>
                    <td><input id="phone" class="form-control" name="teacher_phone" value="<?= $row["teacher_phone"] ?>"></td>
                </tr>
                <tr>
                    <th>教師資格</th>
                    <td><input id="teacher_qualification" class="form-control" name="teacher_qualification" value="<?= $row["teacher_qualification"] ?>"></td>
                </tr>
                <tr>
                    <th>教師年資</th>
                    <td><input id="teacher_experience" class="form-control" name="teacher_experience" value="<?= $row["teacher_experience"] ?>"></td>
                </tr>
                <tr>
                    <th>教師專長</th>
                    <td><input id="teacher_specialty" class="form-control" name="teacher_specialty" value="<?= $row["teacher_specialty"] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <button type="submit" class="btn btn-info">送出</button>
    </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>