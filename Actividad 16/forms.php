<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad16</title>
</head>
<body>
<?php
session_start();
//si ya hay sesion iniciada redirigir
if(isset($_SESSION["msj"])){
    header("location: ./index.php");
}
else{ 
    //formulario para llenar
    echo'<form action="./index.php" method= "POST">
    <fieldset style="width: 400px"><Legend>Inicio de sesión</Legend>
    <table>
        <tbody>
            <tr>
                <td><label>Nombre:</td>';
                    echo"<td><input type=text name=\"Nom\" require></td>";
                echo'</label>
            </tr>
            <br>
            <tr>
                <td><label>Apellidos</td>';
                echo"<td><input type=text name=\"Ape\" require></td>";
                echo'</label>
            </tr>
            <br>
            <tr>
                <td><label>Grupo</td>';
                echo"<td><input type=text name=\"Gru\" require></td>";
                echo'</label>
            </tr>
            <br>
            <tr>
                <td><label>Fecha de nacimiento</td>';
                echo"<td><input type=date name=\"Dat\" require></td>";
                echo'</label>
            <br>
            <tr>
                <td><label>Correo electrónico</td>';
                echo"<td><input type=email name=\"Mail\" require></td>";
                    echo'</label>
            </tr>
            <br>
            <tr>
                <td><label>Contraseña</td>';
                    echo"<td><input type=password name=\"pass\" require></td>";
                echo'</label>
            </tr>
            <br>
            <tr>';
                echo"<td><input type=submit value=Ingrsar name='Enviar'></td></tr>";
        echo'</tbody>
        </table>
            
           
        </fieldset>
    </form>';
}
    ?>
</body>
</html>