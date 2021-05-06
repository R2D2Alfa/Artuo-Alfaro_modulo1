<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Act15</title>
</head>
<body> 
    
    <form action="./Act15.php" method="POST" enctype="multipart/form-data" target="_blank">
        <fieldset style="width: 400px;"> 
        <legend>Galería de arte</legend>
             <tbody>
             <tr>
            <td><label>Introduzca el nombre de la obra </td>
                <td><input type="text" name="Nombre"></td>
            </label>
            </tr>
            <br>
            <tr>
            <td><label>Introduzca el año de publicación</td>
                <td><input type="number" name="Año"></td>
            </label>
            </tr>
            <br>
            <tr>
            <td><label>Introduzca el nombre del autor</td>
                <td><input type="text" name="Autor"></td>
            </label>
            </tr>
            <br>
            <tr>
            <td><label>Introduzca la pintura que desea subir</td>
                <td><input type="file" name="Pintura"></td>
            </tr>
            <tr>
            </label>
            <td><input type="submit" name="Enviar" value="Enviar"></td>
            </tr>
            </tbody>
        </table>
        </fieldset>
    </form>
</body>
</html>