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
	<title>Bonds</title>
</head>
<body>
	<table border="1">
    <tr>
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
            <td><?= $user['qty'] ?></td>
			<td><?= $user['face_value'] ?></td>
			<td><?= $user['coupon'] ?></td>
			<td><?= $user['coupon_period'] ?></td>
			<td>здесь вычисления1</td>
			<td>здесь вычисления2</td>
			<td><?= $user['maturity_date'] ?></td>
			<td><?= $user['broker'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>