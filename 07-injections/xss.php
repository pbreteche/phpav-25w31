<?php

$from_user_data = [
    'title' => 'blablabla',
    'content' => '<script>console.log("I\'m here.")</script>Mon commentaire.'
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <p>Commentaires</p>
    <h3><?= $from_user_data['title'] ?></h3>
    <div><?= $from_user_data['content'] ?></div>
</body>
</html>
