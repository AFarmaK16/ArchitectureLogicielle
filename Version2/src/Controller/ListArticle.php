<?php
require_once 'src/Model/ListArticle.php';
require_once 'src/lib/DatabaseConnection.php';
function ListArticles($id)
{
    $ListArticles = new ListArticles();
    $ListArticles->con = new DatabaseConnection();
    $ListArticles = $ListArticles->getArticle($id);
    require 'templates/ListArticle.php';
}
