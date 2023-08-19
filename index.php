<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$dbh = new \PDO(
			'mysql:host=localhost;dbname=bonds;',
			'root',
			'root'
		);

		$dbh->exec('SET NAMES UTF8');

		// $stm = $dbh->prepare('INSERT INTO bonds_test (`name`, `email`) VALUES (:name, :email)');
		// $stm->bindValue('name', 'PRST');
		// $stm->bindValue('email', 'prst@mail.ru');
		// $stm->execute();

		$stm = $dbh->prepare('SELECT * FROM `bonds_schedule`');
		$stm->execute();

		$allUsers = $stm->fetchAll();
		//var_dump($allUsers);
	?>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dina Polousova">

	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.min.css">
	<title>Bonds</title>
</head>
<body>
	<div class="wrap">
		<h1>Расчет купонных выплат</h1>
		<h2>Введите дату</h2>
		<p>дата, на которую будут произведены вычисления</p>
		<div id="date"></div>
		<table>
			<tr class="header">
				<td>id</td>
				<td>Название</td>
				<td>Кол-во</td>
				<td>Номинал</td>
				<td>Купон</td>
				<td>Купонный период</td>
				<td>Дата ближайшей выплаты</td>
				<td>Размер выплаты</td>
				<td>Maturity Date</td>
				<td>Брокер</td>
			</tr>
			<?php foreach ($allUsers as $user): ?>
			<tr>
				<td><?= $user['id'] ?></td>
				<td><?= $user['name'] ?></td>
				<td class="quantity"><?= $user['qty'] ?></td>
				<td class="face-value"><?= $user['face_value'] ?></td>
				<td class="coupon"><?= $user['coupon'] ?></td>
				<td class="coupon-period"><?= $user['coupon_period'] ?></td>
				<td class="coupon-date">здесь вычисления1</td>
				<td class="coupon-amount">здесь вычисления2</td>
				<td class="maturity-date"><?= $user['maturity_date'] ?></td>
				<td class="broker"><?= $user['broker'] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>
<footer>
	<div class="footer">© Yuthala @ GitHub</div>
</footer>
</html>