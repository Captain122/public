 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog o literaure</title>
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>perviy blog</h2>
            <div>
                <?php foreach ($articles as $c): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$c["id"]?>"><?=$c["title"]?></a></h3>
                    <em>opublikovano: <?=$c["date"]?></em>
                    <p><?=$c["content"]?></p>
                </div>
                <?php endforeach ?>
                
            </div>
            <footer>
                    <p>Copyright &copy;</p>
                </footer>
        </div>
    </body>
</html>

