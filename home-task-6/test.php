<?php

if (isset($_GET['testnumber'])) {
    $dir = scandir(__DIR__.'/json');
    $jsonText = json_decode(file_get_contents(__DIR__.'/json/'.$dir[$_GET['testnumber']], true));
    $test = '/json/'.$dir[$_GET['testnumber']];
}

if (isset($_GET['test'])) {
    $params = explode('&', $_SERVER['QUERY_STRING']);
    echo '<pre>';
    print_r($params[0]);
    echo '</pre>';

    $fileFrom = explode('=', $params[0]);
    echo '<pre>';
    print_r($fileFrom);
    echo '</pre>';
    $jsonText = json_decode(file_get_contents(__DIR__.$fileFrom[1], true));
    echo $jsonText;
}



?>

<?php if (isset($_GET['testnumber'])) { ?>
    <form action="/home-task-6/test.php" method="get" enctype="multipart/form-data">
        <input type="text" name="test" value="<?= $test ?>" style="display: none;">
        <h1>Название теста: <?= $jsonText[0]->name ?></h1>
        <?php for($q = 0; $q < count($jsonText[0]->questions); $q++) {?>
            <div>
                <h3>Вопрос: <?= $jsonText[0]->questions[$q]->q ?></h3>

                <?php for($a = 0; $a < count($jsonText[0]->questions[$q]->variants); $a++) {?>
                    <input name="<?= $q ?>" type="radio" value="<?= $a ?>"> <?= $jsonText[0]->questions[$q]->variants[$a] ?>
                <?php } ?>
            </div>
        <?php } ?>
        <input type="submit">
    </form>
<?php } ?>



