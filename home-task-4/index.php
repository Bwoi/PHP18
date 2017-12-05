<?php
    $jsonData = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=18aaf58b19672f7fe7093a2ccf13079d');
    $fileToJson = json_decode($jsonData, true);
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
<table style="font-family: Arial">
    <tr>
        <td><img src="https://openweathermap.org/img/w/<?= $fileToJson['weather'][0]['icon'] ?>.png" alt=""></td>
    </tr>
    <tr>
        <td>Weather class: <?= $fileToJson['weather'][0]['main'] ?> </td>
    </tr>
    <tr>
        <td>Description Weather: <?= $fileToJson['weather'][0]['description'] ?> </td>
    </tr>
    <tr>
        <td>Wind speed: <?= $fileToJson['wind']['speed'] ?> m/s</td>
    </tr>
    <tr>
        <td>Temperature: <?= round($fileToJson['main']['temp'] -273.15, 0) ?>°C </td>
    </tr>
</table>
</body>
</html>

