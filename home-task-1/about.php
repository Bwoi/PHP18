<?php
	$name = 'Илья';
	$age = 29;
	$city = 'Москва';
	$email = 'bwoi.5000@gmail.com';
	$aboutMe = 'learning php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $name ?></title>
</head>
<body>
	<h1>Страница пользователя <?= $name ?></h1>
	<table style="font-family: Arial, Helvetica, sans-serif;">
		<tr>
			<td width="250" style="font-weight: bold; font-size: 14px; text-align: right;">Имя:</td>
			<td><?= $name ?></td>
		</tr>
		<tr>
			<td width="250" style="font-weight: bold; font-size: 14px; text-align: right;">Возраст:</td>
			<td><?= $age ?></td>
		</tr>
		<tr>
			<td width="250" style="font-weight: bold; font-size: 14px; text-align: right;">Адрес электронной почты:</td>
			<td><?= $city ?></td>
		</tr>
		<tr>
			<td width="250" style="font-weight: bold; font-size: 14px; text-align: right;">Город:</td>
			<td><?= $email ?></td>
		</tr>
		<tr>
			<td width="250" style="font-weight: bold; font-size: 14px; text-align: right;">О себе:</td>
			<td><?= $aboutMe ?></td>
		</tr>
	</table>
</body>
</html>