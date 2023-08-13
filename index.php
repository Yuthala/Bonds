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

		$stm = $dbh->prepare('SELECT id, name FROM `bonds_test`');
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
    <tr><td>id</td><td>Имя</td><td>Email</td></tr>
    <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td>из табл</td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>