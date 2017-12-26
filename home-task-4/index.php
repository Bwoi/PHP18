<?php

    $city = 'London';
    $countryKey = 'uk';
    $appId = '18aaf58b19672f7fe7093a2ccf13079d';
    $resourceLink = 'http://api.openweathermap.org/data/2.5/weather?q=';
    $openFileName = 'weatherJson.txt';

    if (!file_exists($openFileName) || (time() - stat($openFileName)['mtime']) > 3600) {
        $fileGetC = file_get_contents($resourceLink.$city.','.$countryKey.'&appid='.$appId);
        file_put_contents($openFileName, $fileGetC);
        $fileToJson = json_decode($fileGetC);
    } else {
        $fileToJson = json_decode(file_get_contents($openFileName), true);
    }



    echo '<pre>';
print_r($fileToJson);
echo '<pre>';

    $weatherClass = $fileToJson['weather'][0]['main'];
    $weatherIcon = $fileToJson['weather'][0]['icon'];
    $weatherDescription = $fileToJson['weather'][0]['description'];
    $weatherWindSpeed = $fileToJson['wind']['speed'];
    $weatherTemp = round($fileToJson['main']['temp'] -273.15, 0);

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
        <td><img src="https://openweathermap.org/img/w/<?= $weatherIcon ?>.png" alt=""></td>
    </tr>
    <tr>
        <td>Weather class: <?= $weatherClass ?> </td>
    </tr>
    <tr>
        <td>Description Weather: <?= $weatherDescription ?> </td>
    </tr>
    <tr>
        <td>Wind speed: <?= $weatherWindSpeed ?> m/s</td>
    </tr>
    <tr>
        <td>Temperature: <?= $weatherTemp ?>°C </td>
    </tr>
</table>
</body>
</html>

