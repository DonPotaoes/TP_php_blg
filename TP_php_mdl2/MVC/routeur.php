<?php
include __DIR__ .'/controllers/home-controller.php';

include __DIR__ .'/../config.php';

include_once 'functions.php';

include_once 'models/SimpleOrm.php';
$conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, DATABASE_NAME);

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';

switch ($route) {

    case 'liste-article':
        include __DIR__ . '/controllers/articles-controller.php';
        liste();
        break;
}