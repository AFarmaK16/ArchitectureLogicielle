<?php
require_once 'src/Model/ListCategories.php';
require_once 'src/lib/DatabaseConnection.php';
function Categories()
{
    $ListCategories = new ListCategories();
    $ListCategories->con = new DatabaseConnection();
    $ListCategories = $ListCategories->getCategories();
    require 'templates/Header.php';
}
