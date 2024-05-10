<?php
   
    $x = 30;
    $y = 5;

     //Arithmetic operators
    echo "<br>";
    echo "<br>";
    echo $x + $y ."<br>";
    echo $x - $y ."<br>";
    echo $x * $y ."<br>";
    echo $x / $y ."<br>";
    echo $x % $y ."<br>";
    echo $x ** $y ."<br>";
    echo "<br>";

     // Assignment  operators
     $x = 30;
     $y = 5;
     $x = $y;
     echo $x  ."<br>";

     $x = $x+ $y;
     echo $x ."<br>";

     $x -= $y;
     echo $x ."<br>";

     $x *= $y ;
     echo $x ."<br>";

     $x /= $y;
     echo $x ."<br>";

     $x %= $y;
     echo $x ."<br>";
     echo "<br>";

     //Comparison Operators
     $x = 30;
     $y = 5;
     echo var_dump($x == $y) ."<br>";

     echo var_dump($x === $y) ."<br>";

     echo var_dump($x != $y) ."<br>";

     echo var_dump($x <> $y) ."<br>";

     echo var_dump($x !== $y) ."<br>";

     echo var_dump($x > $y) ."<br>";

     echo var_dump($x < $y) ."<br>";

     echo var_dump($x >= $y) ."<br>";

     echo var_dump($x <= $y) ."<br>";

     echo ($x <=> $y) ."<br>";
     echo "<br>";

    // Increment / Decrement Operators
    $x = 30;
    $y = 5;

    echo $x++."<br>";

    echo ++$x."<br>";

    echo $y--."<br>";

    echo --$y."<br>";
    echo --$y."<br>"; echo --$y."<br>"; echo --$y."<br>";