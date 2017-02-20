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
            <h1>perviy blog</h1>
            <div>
                <div class="article">
                    <h3><?=$article["title"]?></h3>
                    <em>opublikovano<?=$article["date"]?></em>
                    <p><?=$article["content"]?></p>
                </div>
            </div>
            <footer>
                    <p>Copyright &copy;</p>
                </footer>
        </div>
    </body>
</html>
