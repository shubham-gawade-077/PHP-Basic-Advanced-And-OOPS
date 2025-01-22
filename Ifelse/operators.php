<?php
 // operators
 // 1. Arithmetic operators
 // 2. Comparison operators 
 // 3. Assignment operators
 // 4. Logical operators
 // 5. Bitwise operators
 // 6. String operators
 
  // 1. Arithmetic operators
 $x=10;
 $y=20;
 echo "Addition: ".$x+$y ."<br>";
 echo "Subtraction: ".$x-$y ."<br>";
 echo "division ".$x/$y ."<br>";
 echo "multiplication " .$x*$y."<br>";
 echo "modulas".$x%$y ."<br>";
 
 //  2. Assignment operators
 $a=5;$b=7;
 echo "exponentiation " .$a**$b ."<br>";
 $p=5; $q=3;
 echo "Addition: ".($p+=$q)."<br>";
 echo "Subtraction: ".($p-=$q)."<br>";
 echo "multiplication: ".($p*=$q)."<br>";
 echo "division: ".($p/=$q)."<br>";
 echo "modulas: ".($p%=$q)."<br>";
 echo "exoponential: ".($p**=$q)."<br>";

 // 3. Comparison operators
 $s=5; $p=8;
 echo "Equal: ".($s==$p)."<br>";
 echo "strict equality: ".($s===$p)."<br>";
 echo "Not equal: ".($s!=$p)."<br>";
 echo "Greater than: ".($s>$p)."<br>";
 echo "Less than: ".($s<$p)."<br>";
 echo "Greater than or equal to: ".($s>=$p)."<br>";
 echo "Less than or equal to: ".($s<=$p)."<br>"; 

 // 4. Logical operators
echo "<hr>";
$c=10;
$d=20;
//echo $c==10 && $d==2;
//echo $c==100 || $d==2;
//echo $c!=10;
echo $c==10 xor $d==2;

 // 5. Bitwise operators


 // 6. String operators
 
?>