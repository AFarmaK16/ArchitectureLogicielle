<?php
require_once 'src/lib/DatabaseConnection.php';
require_once 'src/lib/Categorie.class.php';
require_once 'src/lib/Article.class.php';
class ListArticles
{
    public DatabaseConnection $con;
    public Categorie $categ;
    public Article $article;

    function getListArticles(): array
    {
        $statement = $this->con->getConnection();
        $statement = $statement->query('SELECT  * FROM  article ');
        $ListArticles = [];
        while ($row = $statement->fetch()) {
            $article = new Article();
            $article->id = $row['id'];
            $article->titre = $row['titre'];
            $article->contenu = $row['contenu'];
            $article->dateCreation = $row['dateCreation'];
            $article->dateModification = $row['dateModification'];
            // $chaine=$chaine."<li ><a href='#' id='$id'>$libelle</a></li>";
            $ListArticles[] = $article;
        }
        return $ListArticles;
    }
    function getArticle(int $categ): array
    {
        $statement = $this->con->getConnection();
        $statement = $statement->prepare('SELECT  * FROM  article a ,categorie c  where c.id=a.categorie and a.categorie=? ');
        $statement->execute([$categ]);
        $article = [];
        while ($row = $statement->fetch()) {
            $art = new Article();
            // $art->id = $row['id'];
            $art->titre = $row['titre'];
            $art->contenu = $row['contenu'];
            $art->dateCreation = $row['dateCreation'];
            $art->dateModification = $row['dateModification'];
            // $chaine=$chaine."<li ><a href='#' id='$id'>$libelle</a></li>";
            $article[] = $art;
        }
        return $article;
    }
    function getArticleDetails(int $id): Article
    {
        $statement = $this->con->getConnection();
        $statement = $statement->prepare('SELECT  * FROM  article a WHERE a.id=? ');
        $statement->execute([$id]);
        $article = $row = $statement->fetch();
        $article = new Article();
        $article->titre = $row['titre'];
        $article->contenu = $row['contenu'];
        $article->dateCreation = $row['dateCreation'];
        $article->dateModification = $row['dateModification'];
        // $chaine=$chaine."<li ><a href='#' id='$id'>$libelle</a></li>";
        return $article;
    }
}
