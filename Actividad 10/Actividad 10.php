
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 10</title>
</head>
<body>
<?php
    echo "<table border=1>";
         echo "<thead>";
            echo "<th colspan='4'><H1> Solicitud de ingreso a la Universidad</H1></th>";
            echo"</thead>";
            echo"<tbody>";
            //Imprimir nombre y apellidos ingresados
                echo"<tr>";
                    echo"<td>$_POST[ApP]</td>";
                    echo"<td>$_POST[ApM]</td>";
                    echo"<td colspan='2'>$_POST[Nom]</td>";
                echo"</tr>";
            //Especificar que campos fueron llenados
                echo"<tr>";
                    echo"<td><strong><u>Apellido paterno</u></strong></td>";
                    echo"<td><strong><u>Apellido materno</u></strong></td>";
                    echo"<td colspan='2'><strong><u>Nombre(s)</u></strong></td>";
                echo"</tr>";
            //Especificar e imprimir los campos ingresados (edad y sexo)
                echo"<tr>";
                    echo"<td><strong><u>Sexo</u></strong></td>";
                    echo"<td>$_POST[Hombre]</td>";
                    echo"<td border><strong><u>Edad:</u></strong></td>";
                    echo"<td>$_POST[Ed]</td>";
                echo"</tr>";
            //Imprimir correo, telefono y celular ingresado    
                echo"<tr>";
                    echo"<td colspan='2'>$_POST[Em]</td>";
                    echo"<td>$_POST[tel]</td>";
                    echo"<td>$_POST[cel]</td>";
                echo"</tr>";
            //Especificar que campos fueron llenados(correo, telefono y celular)
                echo"<tr>";
                    echo"<td colspan='2'><strong><u>Correo electronico</u></strong></td>";
                    echo"<td><strong><u>Telefono</u></strong></td>";
                    echo"<td><strong><u>Celular</u></strong></td>";
                echo"</tr>";
            //Imprimir y especificar campos rellenados (Escuela de procedencia y promedio)
                echo"<tr>";
                    echo"<td><strong><u>Escuela de procedencia:</u></strong></td>";
                    echo"<td>$_POST[EsP]</td>";
                    echo"<td><strong><u>Promedio:</u></strong></td>";
                    echo"<td>$_POST[Pro]</td>";
                echo"</tr>";
            // Especificar e imprimir primera opcion
                echo"<tr>";
                   echo"<td colspan='2'><strong><u>Primera opcion</u></strong></td>";
                   echo"<td colspan='2'>$_POST[PrO]</td>";
                echo"</tr>";
            //Especificar e imprimir segunda opcion
                echo"<tr>";
                   echo"<td colspan='2'><strong><u>Segunda opcion</u></strong></td>";
                   echo"<td colspan='2'>$_POST[SegP]</td>";
                echo"</tr>";
            echo"</tbody>";
        echo"</table>";
        
?>
</body>
</html>

