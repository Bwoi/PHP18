<?php
//var_dump($_FILES['filejson']);
if (isset($_FILES['filejson']['name']) && !empty($_FILES['filejson']['name'])) {
    if ($_FILES['filejson']['error'] == UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES['filejson']['tmp_name'], __DIR__.'/json/'.$_FILES['filejson']['name']);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма загрузки тестов</title>
    <style>
        form {
            display: inline-block;
            background: #669ab2;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            color: #ffffff;
        }
        .wrapper {
            margin: 10px;
            padding: 20px;
            border: 1px solid #fff;
        }
        .wrap {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 12px;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            border: none;
            height: 30px;
            outline: none;
        }
        input[type="submit"] {
            border: none;
            width: 100%;
            height: 30px;
        }
    </style>
</head>
<body>
<a style="display: inline-block; font-family: Arial; background: mediumpurple; color: #ffffff; font-weight: bold;" href="./list/list.php">Перейти к загруженным тестам</a>
<form action="/home-task-6/admin.php" method="post" enctype="multipart/form-data">
    <div class="wrapper">
        <div class="wrap">
            <label for="filejson">Добавьте файл в формате JSON</label>
            <input type="file" name="filejson">
        </div>
<!--        <div class="wrap">-->
<!--            <label for="filename">Добавьте будущее имя для теста</label>-->
<!--            <input type="text" name="filename">-->
<!--        </div>-->
        <input type="submit">
    </div>
</form>
</body>
</html>
