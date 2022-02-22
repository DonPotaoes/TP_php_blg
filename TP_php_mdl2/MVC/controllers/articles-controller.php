<?php
include __DIR__ . '/../models/Article.php';

function liste() {
    
    $article = Article::all();

    
    include __DIR__ . '/../views/articles/liste.php';
}