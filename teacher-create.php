<!doctype html>
<html lang="en">

<head>
    <title>新增教師頁面</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <h1 class="mx-auto col-4 mt-5">教師新增頁面</h1>
    <form action="doCreate.php" method="post" class="col-4 mx-auto bordered mt-5">
        <div class="mb-2">
            <label for="name" class="fw-bold">姓名</label>
            <input type="text" id="name" class="form-control" name="teacher_name" minlength="2">

        </div>
        <div class="mb-2">
            <label for="phone" class="fw-bold">電話號碼</label>
            <input type="tel" id="phone" class="form-control" name="teacher_phone">
        </div>
        <div class="mb-2">
            <label for="mail" class="fw-bold">電子郵件</label>
            <input type="email" id="mail" class="form-control" name="teacher_mail" placeholder="">
        </div>
        <div class="mb-2" class="fw-bold">
            <label for="" class="fw-bold">性別</label>
            <div class="form-check">
                <input id="male" class="form-check-input" type="radio" name="teacher_gender" value="男" required>
                <label class="form-check-label" for="male">男性</label>
            </div>
            <div class="form-check">
                <input id="female" class="form-check-input" type="radio" name="teacher_gender" value="女" required>
                <label class="form-check-label" for="female">女性</label>
            </div>
        </div>
        <div class="mb-2">
            <label for="" class="fw-bold">教師資格</label>
            <br>
            <!-- <input type="text" class="form-control" name="teacher_qualification" placeholder=""> -->
            <input type="checkbox" id="option1" name="teacher_qualification[]" value="咖啡師證照">
            <label for="option1">咖啡師證照</label>

            <input type="checkbox" id="option2" name="teacher_qualification[]" value="咖啡品鑑師">
            <label for="option2">咖啡品鑑師</label>

            <input type="checkbox" id="option3" name="teacher_qualification[]" value="咖啡萃取師">
            <label for="option3">咖啡萃取師</label>
            <input type="checkbox" id="option4" name="teacher_qualification[]" value="咖啡烘焙師">
            <label for="option4">咖啡烘焙師</label>
            <br>
            <label for="option5" class="mt-3">其他:</label>
            <br>
            <textarea name="teacher_qualification[]" id="option6" style="height:18px,width=140px"></textarea>

        </div>
        <div class="mb-2">
            <label for="qualification" class="fw-bold">教學年資(單位:年)</label>
            <div>
                <input id="qualification" type="number" class="form-control col-10" name="teacher_experience" min="0">
            </div>

        </div>
        <div class="mb-2">
            <label for="specialty" class="fw-bold">教師專長</label>
            <input type="text" id="specialty" class="form-control" name="teacher_specialty" placeholder="">
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-info" type="submit">送出</button>
            <a class="btn btn-danger ms-5" href="teacher-list.php">取消</a>
        </div>

    </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

</body>

</html>