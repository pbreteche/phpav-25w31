<?php

$username = 'root\' OR 1; DELETE FROM users; --';

$pdo = new \PDO('mysql:host=localhost;dbname=demo', 'pierre', 'secret');
$statement = $pdo->prepare('SELECT * FROM `user` WHERE username = :username AND `active` = 1');
$statement->bindValue(':username', $username);
echo $statement->queryString;
