<?php
    $data = json_decode(file_get_contents(__DIR__.'/addressBook.json'), true);
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


    <?php foreach ($data as $contact) { ?>
        <table style="border: 3px dotted #000; margin-bottom: 20px; width: 500px;">
            <?php
                $lastName = $contact['lastName'];
                $firstName = $contact['firstName'];
                $address = $contact['address'];
                $phones = $contact['phones'];
            ?>
            <tr>
                <td style="width: 150px; text-align: right; height: 50px; background: #d1d1d1; padding-right: 15px;">
                    Фамилия:
                </td>
                <td>
                    <?= $lastName ?>
                </td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right; height: 50px; background: #d1d1d1; padding-right: 15px;">
                    Имя:
                </td>
                <td>
                    <?= $firstName ?>
                </td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right; height: 50px; background: #d1d1d1; padding-right: 15px;">
                    Адрес:
                </td>
                <td>
                    Город <?= $address['city'] ?>, улица <?= $address['street'] ?>, дом <?= $address['build'] ?>
                </td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right; height: 50px; background: #d1d1d1; padding-right: 15px;">
                    Номера телефонов:
                </td>
                <td>
                    <?php if ($phones['home'] != '') {?>
                    Домашний: <?= $phones['home']?>
                    <?php } ?>
                    <?php if ($phones['work'] != '') {?>
                    Рабочий: <?= $phones['work']?>
                    <?php } ?>
                    <?php if ($phones['mobile'] != '') {?>
                    Мобильный: <?= $phones['mobile']?>
                    <?php } ?>
                </td>
            </tr>
        </table>
    <?php }?>


</body>
</html>