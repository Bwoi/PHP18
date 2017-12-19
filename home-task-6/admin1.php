<?php
    if (!is_dir('tests')) {
        mkdir('./tests');
    }

    if (isset($_FILES['json']['name']) && !empty($_FILES['json']['name']) && $_FILES['json']['error'] == UPLOAD_ERR_OK && $_FILES['json']['size'] != 0) {
        echo $_FILES['json']['name'];
        move_uploaded_file($_FILES['json']['tmp_name'], __DIR__."/tests/".$_FILES['json']['name']);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/home-task-6/admin1.php" method="post" enctype="multipart/form-data" style="display: block; margin-bottom: 30px;">
    <div style="margin-bottom: 10px;">
        <label for="json" style="display: block;">Добавьте файл JSON с тестом</label>
        <input type="file" name="json">
    </div>
    <input type="submit">
</form>
<a href="./list.php">
    посмотреть все загруженные тесты
</a>

</body>
</html>
