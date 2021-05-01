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
    echo"<table border=1>";
        echo"<tbody>";
            for ($x=0; $x<$t ; $x++) { 
                for ($y=0; $y<$t ; $y++) { 
                   if ($x%2==0) {
                       if ($y%2==0) {
                             echo "<img src='./blanco (1).jpg' alt=Imagen de recuadro blanco height='100' width='100'>";
                         }
                         else
                         echo "<img src='./negro (1).jpg' alt=Imagen de recuadro negro height='100' width='100'>";
                   }
                   else{
                        if ($y%2==0){
                            echo "<img src='./negro (1).jpg' alt=Imagen de recuadro negro height='100' width='100'>";
                         }
                         else
                            echo "<img src='./blanco (1).jpg' alt=Imagen de recuadro blanco height='100' width='100'>"; 
                     }

                }
                echo"<br>";
            }
        echo"</tbody>";
    echo"</table>";
    ?>
</body>
</html>
