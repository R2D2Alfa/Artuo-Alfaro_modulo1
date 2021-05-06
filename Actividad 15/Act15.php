<?php

    if(isset($_FILES['Pintura'])){
        $arch=$_FILES['Pintura']['tmp_name'];
        $name=$_FILES['Pintura']['name'];
        $Pintor=(isset($_POST['Autor']))?$_POST['Autor'] : "Sin autor";
        $Publicación=(isset($_POST['Año']))?$_POST['Año']:"Sin año";

        $Pintura=$_POST['Nombre']. "&". $Pintor. "&". $Publicación;
        rename($arch, 'Statics/'. $Pintura . ".". pathinfo($name, PATHINFO_EXTENSION));
        echo "<h1>FELICIDADES!! HA SUBIDO UNA OBRA A LA GALERÍA</h1>";
        echo '<form action=Act15.php>
                <input type="submit" value="Revisar Galería">
            </form>';
    }
    else{
        $ruta_carpeta = "./Statics";
        $carpeta = opendir($ruta_carpeta);
        $archivos = array();
        $hayArchivos= true;
        while($hayArchivos){
            $archivo = readdir($carpeta);
            if($archivo !== false ){
                if($archivo != "." && $archivo!= ".."){
                    $ext=pathinfo($archivo, PATHINFO_EXTENSION);
                    if($ext=="jpg"||$ext=="png"||$ext=="jpeg"){
                        array_push($archivos, $archivo);
                    }
                }
            }
            else{
                $hayArchivos=false;
            }
        }
        if($archivos!=NULL){
            echo "<h1>Imagenes en la galería de pintura</h1>";
            echo "<table border=1>";
                echo "<tr>";
                foreach($archivos as $key => $value){
                    echo "<td>";
                        echo "<img src='./Statics/". $value."'width=300 height=300>";
                        echo "<br>";
                        $Obra=explode("&", $value);
                        echo "<br>";
                        echo "Nombre de la pintura: ".$Obra[0];
                        echo "<br>";
                        echo "Nombre del autor: ".$Obra[1];
                        echo "<br>";
                        $Año1=explode(".", $Obra[2]);
                        echo "Año: ".$Año1[0];
                        echo "<br>";
                    echo "</td>";
                }
                echo "</tr>";
        }
        else{
            echo "<h1>No ha ingresado obras a la galería</h1>";  
        }   
        closedir($carpeta); 
        echo "<form action=Actividad 15.php>";
            echo "<br>";
            echo "<input type=submit value=Ingresar mas obras>";
        echo "</form>";

    }
?>