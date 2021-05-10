<?php

    session_start();
    //Si ya se declaró todo poner información en el cuadro
    if (isset($_SESSION["msj"])) {
        echo'
        <table border="1">
        <tbody>
            <tr>
                <td><strong>Nombre</strong></td>';
                echo"<td>$_SESSION[Nom]</td>";
            echo'</tr>
            <tr>
                <td><strong>Apellido</strong></td>';
                echo"<td>$_SESSION[Ape]</td>";
            echo'</tr>
            <tr>
                <td><strong>Grupo</strong></td>';
                echo"<td>$_SESSION[Gru]</td>";
            echo'</tr>
            <tr>
                <td><strong>Fecha de nacimiento</strong></td>';
                echo"<td> $_SESSION[Dat]</td>";
            echo'</tr>
            <tr>
                <td><strong>Correo electrónico</strong></td>';
                echo"<td>$_SESSION[Mail]</td>";
            echo'</tr>
        </tbody>
        </table>';
        echo'
        <form action="./cerrar sesion.php" method ="POST">
        <input type="submit" name="Cerrar sesion" value="cerrar sesion">
        </form>';
    }
    //Si ya se ingresó nombre
    elseif (isset($_POST["Nom"])){
        //declarar todos los valores ingresados en el formulario
        $_SESSION["Nom"]=$_POST["Nom"];
        $_SESSION["Ape"]=$_POST["Ape"];
        $_SESSION["Gru"]=$_POST["Gru"];
        $_SESSION["Dat"]=$_POST["Dat"];
        $_SESSION["Mail"]=$_POST["Mail"];
        $_SESSION["msj"]=$_POST["Enviar"];
        //redirigir 
        header("location: ./index.php");

    }
    //En caso de no haber introducido nada regresar al formulario
    else {
        header("location: ./forms.php");
    }
?>