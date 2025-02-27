<?php
 
 define("pi", 3.141592);

 $raio = 10;

 $area = 4 * pi * pow($raio, 2);

 $volume = (4/3) * pi * pow($raio, 3);

 echo "O valor da área é: " .$area;
 echo "<br>";
 echo "O valor do volume é: " .$volume;

?>