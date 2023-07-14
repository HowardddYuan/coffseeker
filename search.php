<?php

if(isset($_GET["name"])){
    $name=$_GET["name"];
    require_once("../db_connect.php");

    if(!empty($_GET["name"])){
        $sql="SELECT * FROM coffseeker_teachers WHERE valid=1 AND teacher_name LIKE '%$name%'";
        $result=$conn->query($sql);
        $filteredAll=$result->num_rows;
        $filterEach=$result->fetch_all(MYSQLI_ASSOC);
    }else{
        $filteredAll=0;
    }


    }
    

    



?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<div class="container">
        <div class="py-2">
            <a class="btn btn-info" href="teacher-list.php">回使用者列表</a>
        </div>
        <div class="py-2">
            <form action="search.php">
                <div class="row gx-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="搜尋使用者" name="name">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-info" type="submit">搜尋姓名</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="py-2 d-flex justify-content-between align-items-center">
            <?php if(isset($_GET["name"])): ?>
            <div>
                搜尋 <?=$name?> 的結果, 共有 <?= $filteredAll ?> 筆符合的資料
            </div>
            <?php endif; ?>
        </div>
        <?php if ($filteredAll != 0) : ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>電話</th>
                        <th>性別</th>
                        <th>email</th>
                        <th>教師資格</th>
                        <th>教師年資</th>
                        <th>教師專長</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filterEach as $row) : ?>
                        <tr>
                            <td><?= $row["teacher_id"] ?></td>
                            <td><?= $row["teacher_name"] ?></td>
                            <td><?= $row["teacher_phone"] ?></td>
                            <td><?= $row["teacher_gender"] ?></td>
                            <td><?= $row["teacher_mail"] ?></td>
                            <td><?= $row["teacher_qualification"] ?></td>
                            <td><?= $row["teacher_experience"] ?></td>
                            <td><?= $row["teacher_specialty"] ?></td>
                            <td>
                                <a href="teacher-detail.php?teacher_id=<?= $row["teacher_id"] ?>" class="btn btn-info">顯示</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>