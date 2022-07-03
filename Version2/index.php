<?php
// Main Controller;
require_once 'src/Controller/HomepageController.php';
require_once 'src/Controller/HeaderController.php';
require_once 'src/Controller/ListArticle.php';
Categories();
if (isset($_GET['action']))
{
    if ($_GET['action'] == 'spe')
    {
        if (isset($_GET['categorie']))
        {
            if ($_GET['categorie'] > 0)
            {
                ListArticles($_GET['categorie']);
            } 
            else
            {
                // echo 'nonn';
                HomePage();
            }
        } 
        else
        {
            HomePage();
        }
    }
    elseif ($_GET['action'] == 'details')
    {
        ArticleDetails($_GET['article']);
    } else
    {
        HomePage();
    }
}
else 
{
    HomePage();
}
