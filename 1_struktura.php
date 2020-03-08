<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "text";




    //rowne / indentyczne

    $x=1;
    if ($x==$y)
      
    echo "Rowne"; 
    else
    echo "Rozne";

    if ($x==$y)
    echo "identyczne<br>";
    else 
    echo "nieidentyczne<br>";
    

    echo gettype ($x); //integer
    echo gettype ($y); //double


    //operatory rzutowania danych
    $text="123ssd";
    $x=(int)$text;
    echo $x;
    echo gettype ($x); //interger

    $text=0;
    $x=(bool)$text;
    echo "\$text: $text<br>";

    $text=10;
    $x=(unset)$text;
    echo "\$text: $text<Br>";
    echo "\$x: $x<br>";

    //rozmiar typu integer

    echo PHP_INT_SIZE;
    echo PHP_INT_MAIN;
    echo PHP_INT_MAX;

    //kontorla typu zmiennych

    $x=10;
    echo_is_int($x); // dostaniemy 1
    echo is_string($x); // false, nic nie wyswietla
    echo is_bool($x); 
    echo is_float($x);
    echo is_null($x);

    //operator ignorowania bledow

    $w; 
    echo $w;
    echo gettype($w);

    // zmienne super globalne

    // $_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER,  GETPOST - do formularza, SERVER- do wysylania na serwer
    
    echo $_SERVER['SERVER_PORT']; // 81
    echo $_SERVER['SERVER_NAME'];   // localhost/ 127.0.0.1
    echo $_SERVER['SCRIPT_NAME'];
    echo $_SERVER['DOCUMENT_ROOT'];

    $fileLocal = $_SERVER['DOCUMENT_ROOT'];
    $fileLocal = $_SERVER['SCRIPT_NAME'];
    echo $fileLocal

    // stale - nazwa stalej z duzej litery

    define("NAME", "Janusz");
    echo NAME;
    define("surname", "Kowal");
    echo surname;
    echo PHP_VERSION;
    echo _Line_;
    echo __FILE__;
    echo _DIR_;




    ?>
</body>
</html>
