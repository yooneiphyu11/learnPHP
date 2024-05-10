<?php
    // number
    $x = 10;
    $y = 10.1;
    $z = "10";

    echo var_dump(is_int($x));
    echo "<br>";

    echo var_dump($y);
    echo "<br>";

    echo var_dump(is_null($z));
    echo "<br>";

    echo var_dump(is_bool($y));
    echo "<br>";
    echo "<br>";

    //casting
    $a = 5;       
    $b = 5.34;    
    $c = "25 kilometers"; 
    $e = "hello"; 
    $f = true;    
    $g = NULL;  

    $a = (string) $a;
    echo var_dump($a);
    echo "<br>";

    $b = (int) $b;
    echo var_dump($b);
    echo "<br>";

    $e = (float) $e;
    echo var_dump($e);
    echo "<br>";

    $g = (bool) $g;
    echo var_dump($g);
    echo "<br>";

    $c = (array) $c;
    echo var_dump($c);
    echo "<br>";

    $f = (object) $f;
    echo var_dump($f);
    echo "<br>";
    echo "<br>";

    //Math
    echo (pi());
    echo "<br>";

    echo(min(3,6,13,1,5,7)."<br>");
    echo(max(3,6,13,1,5,7));
    echo "<br>";

    echo(abs(-45.3482));
    echo "<br>";

    echo(sqrt(256)."<br>");

    echo(round(0.53)."<br>");
    echo(round(4.53)."<br>");

    echo(rand()."<br>");
    echo(rand(50,100)."<br>");
