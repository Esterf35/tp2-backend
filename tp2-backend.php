<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

//punto 1

$variable1 = 8;

if($variable1 >= 1) {
    echo"<h2> El número $variable1 es positivo</h2>";
} else {
    echo "<h2>El número $variable1 NO es positivo </h2>";
}

//Punto 2

$variable2 = 5;

if ($variable2 > 1 && $variable2 < 10){
    echo"<h2> El número es mayor a 1 </h2>";
}else{
    echo"<h2> EL numero No es menor a 10</h2>";
}

//punto 3 

$variable3 = 15;
if ($variable3 < 2 || $variable3 < 10){
    echo"<h2> El numero es menor a 2 </h2>";

}else{
    echo"<h2> El numero es mayor a 10 </h2>";
}

//punto 4

$numero1=30;
$numero2=20;

if ($numero1 > $numero2){

   echo "<h2> El resultado es = </h2>" .($numero1 + $numero2);
   echo "<h2> El resultado es = </h2>" .($numero1 - $numero2);
}
        echo "<h2>El resultado es =  </h2>",($numero1 - $numero2);
    }



    ?>
</body>
</html>

 
