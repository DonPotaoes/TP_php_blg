<?php
if (empty($_GET['id'])) die('Erreur 404');

include_once __DIR__ . '/../models/Article.php';
$art = Article::retrieveByPK($_GET['id']);

if (empty($art)) die('Erreur 404');

include __DIR__ . '/../views/articles/details-article.php';