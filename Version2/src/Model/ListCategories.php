<?php
require_once 'src/lib/DatabaseConnection.php';
require_once 'src/lib/Categorie.class.php';
class ListCategories
{
    public DatabaseConnection $con;
    public Categorie $categ;

    function getCategories(): array
    {
        $statement = $this->con->getConnection();
        $statement = $statement->query('SELECT  * FROM  categorie order by libelle');
        $Listcategories = [];
        while ($row = $statement->fetch()) {
            $categ = new Categorie();
            $categ->libelle = $row['libelle'];
            $categ->id = $row['id'];
            $Listcategories[] = $categ;
        }
        return $Listcategories;
    }
}
