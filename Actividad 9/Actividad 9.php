<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 9
    </title>
</head>
<body>
<?php  
    $t=6;
    $x=0;
    $y=0;
    echo"<table border=1>";
        echo"<tbody>";
            while ($x<$t) { 
                //Siempre y cuando x sea menor que t se va a imprimir una fila con imagen blanca
                while ($y<$t) { 
                   if ($x%2==0) {
                       if ($y%2==0) {
                           // Si el % de "y" y de "x" tienen el mismo valor (0 o 1) se imprimirá una imagen blanca
                             echo "<img src='./blanco (1).jpg' alt=Imagen de recuadro blanco height='100' width='100'>";
                         }
                         else
                          // Si el % de "y" y de "x" tienen diferente valor (0 y 1) se imprimirá una imagen negra
                         echo "<img src='./negro (1).jpg' alt=Imagen de recuadro negro height='100' width='100'>";
                   }
                   else{
                        if ($y%2==0){
                            echo "<img src='./negro (1).jpg' alt=Imagen de recuadro negro height='100' width='100'>";
                         }
                         else
                            echo "<img src='./blanco (1).jpg' alt=Imagen de recuadro blanco height='100' width='100'>"; 
                     }
                     $y=$y+1;
                }
                $y=0;
                $x=$x+1;
                echo"<br>";
            }
        echo"</tbody>";
    echo"</table>";
    ?>
</body>
</html>
