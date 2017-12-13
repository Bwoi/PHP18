<?php
//if (isset($_POST['filejson'])) {
//    echo '<pre>';
//    var_dump($_POST['filejson']);
//    echo '</pre>';
//
//}
$dir = scandir('../json');

?>

<form action="/home-task-6/test.php" method="get" enctype="multipart/form-data">
    <?php
        if (count($dir) > 2) {
            for ($d = 2; $d < count($dir); $d++) {
                ?>
                    <label for="<?= $d ?>"><?= $dir[$d] ?></label>
                    <input name="testnumber" type="radio" value="<?= $d ?>" id="<?= $d ?>">
                <?php
            }
        }
    ?>
    <input type="submit">
</form>
