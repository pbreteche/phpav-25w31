<?php

use App\Article;

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$articles = $pdo->query('SELECT * FROM `article`')
    ->fetchAll(PDO::FETCH_CLASS, Article::class);

foreach ($articles as $article) {
    echo $article->getTitle() . '<br>';
}
