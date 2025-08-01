<?php

$username = 'root\' OR 1; DELETE FROM users; --';

$sql = 'SELECT * FROM `user` WHERE username = \''.$username.'\' AND `active` = 1';

echo $sql;

