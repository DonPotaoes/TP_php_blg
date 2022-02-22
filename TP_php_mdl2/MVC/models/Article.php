<?php

include_once __DIR__ . '/SimpleOrm.php';

class Article extends SimpleOrm {
    public $auteur, $titre, $image, $contenu, $id, $date_de_publication;
}