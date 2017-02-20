<?php
    require_once("db.php");
    require_once("modules/articles.php");

    $link =db_connect();
    $article = articles_get($_GET["id"]);
    

    include("views/articles.php");
?>