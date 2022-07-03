<?php
require_once 'src/Model/ListArticle.php';
require_once 'src/lib/DatabaseConnection.php';
function HomePage()
{
    $ListArticles = new ListArticles();
    $ListArticles->con = new DatabaseConnection();
    $ListArticles = $ListArticles->getListArticles();
    require 'templates/Homepage.php';
}
function ArticleDetails($id)
{
    $ArticleDetails = new ListArticles();
    $ArticleDetails->con = new DatabaseConnection();
    $ArticleDetails = $ArticleDetails->getArticleDetails($id);
    require 'templates/DetailsArticle.php';
}
