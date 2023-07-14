<?php

//refer to user/user-list.php

$page=$_GET["page"] ?? 1;
$type=$_GET["type"] ?? 1;  //unfinished orders setting


$sqlSearch="SELECT teacher_id FROM coffseeker_teachers WHERE valid=1 ";

require_once("../db_connect.php");

if($type==1){
    $order="ORDER BY teacher_id ASC";
}elseif($type==2){
    $order="ORDER BY teacher_id DESC";
}

$sql="SELECT coffseeker_teachers.teacher_id FROM coffseeker_teachers WHERE valid=1";
$resultTotal=$conn->query($sql);//all the types of results selected
$totalUser=$resultTotal->num_rows;//total amount of selected teachers

$idPerPage=5;
$idPageStart=($page-1)*$idPerPage;

$totalPage=ceil($totalUser/$idPerPage);

$idPerPageLimit="SELECT coffseeker_teachers.* FROM coffseeker_teachers WHERE valid=1 $order LIMIT $idPageStart,$idPerPage";
$result=$conn->query($idPerPageLimit);





//id auto substitution awaiting to be set
?>
<!doctype html>
<html lang="en">

<head>
  <title>教師清單</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
         .hover-bgc:hover{
            background-color: #F0F0F0;
        }
    </style>

</head>

<body>
<div class="container">
    <h1 class="mt-5">教師清單</h1>
        <div class="py-2">
            <form action="search.php">
                <div class="row gx-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="搜尋使用者" name="name">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-info" type="submit">搜尋</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <?php
        $user_count = $result->num_rows;
        ?> -->
        <div class="py-2 d-flex justify-content-between align-items-center">
            <a class="btn btn-info" href="teacher-create.php">新增</a>
            <div>
                共 <?= $totalUser ?> 人, 第 <?= $page ?> 頁
            </div>
        </div>
        <div class="py-2 d-flex justify-content-end">
            <div>
                <a class="btn btn-info" href="teacher-list.php?page=<?=$page?>&type=1"><i class="fa-solid fa-arrow-down-wide-short"></i></a>
                <a class="btn btn-info" href="teacher-list.php?page=<?=$page?>&type=2"><i class="fa-solid fa-arrow-up-short-wide"></i></a>
            </div>
        </div>
        <?php
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        // var_dump($rows);
        // exit;
        ?>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr class="hover-bgc">
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for($i=1; $i<=$totalPage; $i++): ?>
                <li class="page-item <?php
                    if($i==$page)echo "active";
                    ?>"><a class="page-link " href="teacher-list.php?page=<?=$i?>&type=<?=$type?>"><?=$i?></a></li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>

  </script>
</body>

</html>