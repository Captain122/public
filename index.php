<?php
    require_once("db.php");
    require_once("modules/articles.php");
    
    $link= db_connect();
    $articles =articles_all($link);

    include("views/articles.php");
?>