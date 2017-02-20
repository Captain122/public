 <html>
<head>
 <title>My First Page</title>
</head>
<body>
    <?PHP 

    function add($par1,$par2){
        return $par1 * $par2;
    }

    $a =$_GET["a"];
    $b =$_GET["b"];

    echo add($a,$b);
    for($k=1;$k<12;$k++){
        echo $k."</br>";
    }


   ?>
</body>
</html>