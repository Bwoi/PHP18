<?php

    $fileDir = './tests/';

    if (!file_exists($fileDir.$_GET['test'].'.json')) {
        echo 'Такого теста нет, вернитесь на страницу выбора теста';
        exit();
    }

    $content = json_decode(file_get_contents('./tests/'.$_GET['test'].'.json'));
    $testResult = 'Ответьте на вопросы из теста и вы увидете здесь результат';
    if (isset($_POST['result'])) {

        $wrongArr = [];
        for ($r = 0; $r < count($content[0]->questions); $r++) {
            if($_POST['q-'.$r] != $content[0]->questions[$r]->answer) {
                $wrongArr[] = $r+1;
            }
        }

        if (count($wrongArr) > 0) {
            $testResult = 'Неправильные ответы в вопросах: '.implode(', ', $wrongArr);
        } else {
            $testResult = 'Тест пройден без ошибок';
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
    <title>Document</title>
</head>
<body>
<?php if ($testResult) { ?>
    <div class="testResult">
        <?= $testResult ?>
    </div>
<?php } ?>

<h2><?= $content[0]->name ?></h2>
<form action="./testing.php?test=<?= $_GET['test'] ?>" method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" style="display: none;" name="result" value="true">
    <?php for ($i = 0; $i < count($content[0]->questions); $i++) {?>
        <div style="margin-bottom: 50px;">
            <p>Вопрос <?= $i+1 ?>. <?= $content[0]->questions[$i]->q ?></p>
            <?php foreach ($content[0]->questions[$i]->variants as $variant) { ?>
                <div>
                    <label for="q-<?= $i.$variant ?>"> <?= $variant ?> </label>
                    <input type="radio" id="q-<?= $i.$variant ?>" name="q-<?= $i ?>" value="<?= $variant ?>">
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <input type="submit" value="Проверить">
</form>
</body>
</html>
