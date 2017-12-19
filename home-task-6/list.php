<?php
    $scan = scandir('./tests');
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

<?php if (count( $scan ) > 2) { ?>
    <form action="./testing.php" method="get" enctype="application/x-www-form-urlencoded">
        <?php for ($i = 2; $i < count( $scan ); $i++) {?>
            <div style="background: lightblue; width: 300px; margin-bottom: 30px;">
                <?php
                    $content = json_decode(file_get_contents('./tests/'.$scan[$i]));
                ?>
                <label for="testn-<?= $i ?>"><?= mb_strtoupper(mb_substr($content[0]->name, 0, 1)).mb_strtolower(mb_substr($content[0]->name, 1)) ?></label>
                <input type="radio" name="test" value="<?= mb_substr($scan[$i], 0, strlen($scan[$i]) - 5 )  ?>" id="testn-<?= $i ?>">
            </div>
        <?php } ?>
        <input type="submit" value="Пройти тест">
    </form>
<?php } else { ?>
    Нет загруженных тестов
<?php } ?>

</body>
</html>
