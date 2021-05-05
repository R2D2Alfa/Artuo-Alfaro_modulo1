<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Act14</title>
</head>
<body>
<?php
$consultar=(isset($_POST["Consultar"]));
 //Si consultar es diferente a cero ejecutar
if ($consultar!=Null) {
//Funcion que contiene la suma de horas
function mundo($hora=0){
    $Hora=explode(":",$_POST["hora"]);
    $Hora[0]=$Hora[0]+$hora;
    if ($Hora[0]>23) {
        $Hora[0]=$Hora[0]-24;
    }  
    $hf=implode(":",$Hora);
    return $hf;
}
//Le da valores según la diferencia de horas
$s=(isset($_POST["NY"]))?1:NULL;
$t=(isset($_POST["Sao"]))?2:NULL;
$u=(isset($_POST["Mad"]))?7:NULL;
$v=(isset($_POST["Par"]))?7:NULL;
$w=(isset($_POST["Rom"]))?7:NULL;
$x=(isset($_POST["Ate"]))?8:NULL;
$y=(isset($_POST["Bej"]))?11:NULL;
$z=(isset($_POST["Tok"]))?14:NULL;

    //tabla de horas
    echo"<table border=1>";
        echo"<thead>";
            echo"<th colspan='2'>Reloj Mundial</th>";
        echo"</thead>";
        echo"<tbody>";
        //Imprime la hora seleccionada
            echo"<tr>";
                echo"<td><strong>Ciudad de México</strong></td>";
                echo"<td>$_POST[hora]</td>";
            echo"</tr>";
            //comprueba que se haya seleccionado Nueva York
            if ($s!=NULL) {
                echo"<tr>";
                    echo"<td><strong>Nueva York</strong></td>";
                    echo"<td>".mundo($s)."</td>";
                echo"</tr>";  
            }
            //comprueba que se haya seleccionado Madrid
                if ($u!=NULL) {
            echo"<tr>";
                echo"<td><strong>Madrid</strong></td>";
                echo"<td>".mundo($u)."</td>";
            echo"</tr>";
                }
            //comprueba que se haya seleccionado Roma
            if ($w!=NULL) {
            echo"<tr>";
                echo"<td><strong>Roma</strong></td>";
                echo"<td>".mundo($w)."</td>";
            echo"</tr>";
            }
            //comprueba que se haya seleccionado Bejing
            if ($y!=NULL) {
            echo"<tr>";
                echo"<td><strong>Bejin</strong></td>";
                echo"<td>".mundo($y)."</td>";
            echo"</tr>";
            }
            //comprueba que se haya seleccionado Sao Paulo
            if ($t!=NULL) {
            echo"<tr>";
                echo"<td><strong>Sao Paulo</strong></td>";
                echo"<td>".mundo($t)."</td>";
            echo"</tr>";
            }
            //comprueba que se haya seleccionado Paris
            if ($v!=NULL) {
            echo"<tr>";
                echo"<td><strong>Paris</strong></td>";
                echo"<td>".mundo($v)."</td>";
            echo"</tr>";
            }
            //comprueba que se haya seleccionado Atenas
            if ($x!=NULL) {
            echo"<tr>";
                echo"<td><strong>Atenas</strong></td>";
                echo"<td>".mundo($x)."</td>";
            echo"</tr>";
            }
            //comprueba que se haya seleccionado Tokio
            if ($z!=NULL) {
            echo"<tr>";
                echo"<td><strong>Tokio</strong></td>";
                echo"<td>".mundo($z)."</td>";
            echo"</tr>";
            }
        echo"</tbody>";
    echo"</table>";
}
else {
        //Se declara el cumpleaños
        $cumpl=$_POST["Cumpleaños"];
        //Fecha de hoy
        $ho=date ("Y-m-d");
        //Eliminar "-"
        $cumple=explode("-",$cumpl);
        $hoy=explode("-",$ho);
        //restar meses
        $resta=$cumple[1]-$hoy[1];
        $meses=[0,31,28,31,30,31,30,31,31,30,31,30,31];
        $resta2=0;
        $resta3=0;
        $a=0;
        //Si la resta de meses es positiva
        if ($resta>0) {
            //Pasar por el arreglo según el més inicial para empezar a sumar días
            for ($i=0; $i < $resta; $i++) { 
                $resta2=$meses[$hoy[1]+$i]+$resta2;
            }
            //Sumar o restar los días que faltan
            $resta3=$cumple[2]-$hoy[2];
            if ($resta3>0) {
                $resta2=$resta2+$resta3;
            }
            else {
                $resta2=$resta2+$resta3;
            }
        }
        //Si la resta de meses es cero
        elseif ($resta==0) {
            //Restar o sumar días según el caso
            $resta2=$cumple[2]-$hoy[2];
            if ($resta2>0) {
                $resta2=$resta2;
            }
            else {
                $resta2=$resta2+365;
            }
        }
        //Si la resta de meses es negativa
        else {
            $resta=$resta*-1;
            //Pasar por el arreglo según el més inicial para empezar a sumar días
            for ($i=0; $i < $resta; $i++) { 
                $resta2=$meses[$cumple[1]+$i]+$resta2;
            }
            //Sumar o restar los días que faltan
            $resta3=$cumple[2]-$hoy[2];
            if ($resta3>0) {
                $resta2=$resta2-$resta3;
            }
            else {
                $resta2=$resta2-$resta3;
            }
            $resta2=-$resta2+365;
        }
        
        //Obtener las horas
        $resta4=$resta2*24;
      
        //Obtener los días
        $resta5=$resta4*60;
        
        //asignar variable a las checkbox
        $w=(isset($_POST["Dias"]))?1:NULL;
        $x=(isset($_POST["Horas"]))?1:NULL;
        $y=(isset($_POST["Minutos"]))?1:NULL;
        $z=(isset($_POST["Fin"]))?1:NULL;
        echo"<table border=1>";
            echo"<thead>";
            //Imprimir cumpleaños
                echo"<th>Cumpleaños:</th>";
                echo"<th>$cumpl</th>";
            echo"</thead>";
            //Imprimir Días si es seleccionado
        if ($w!=NULL){
            echo"<tbody>";
                echo"<tr>";
                    echo"<td>Dias:</td>";
                    echo"<td>$resta2</td>";
                echo"</tr>";
        }
         //Imprimir Horas si es seleccionado
        if ($x!=NULL){
                echo"<tr>";
                    echo"<td>Horas:</td>";
                    echo"<td>$resta4</td>";
                echo"</tr>";
        }
         //Imprimir Minutos si es seleccionado
        if ($y!=NULL){
                echo"<tr>";
                    echo"<td>Minutos:</td>";
                    echo"<td>$resta5</td>";
                echo"</tr>";
        }
        //Imprimir si cae en fin de semana si es seleccionado
        if ($z!=NULL){
            //Pedir a día de hoy que día de la semana es
            $hoy1=date("w");
            
            if ($resta!=0) {
                //Si es mayor a 0 la resta
                if ($resta>0) {
                    //Dia menos el valor del día menos dos
                    $fin=$resta2-$hoy1-2;
                }
                //Si es menor a 0 la resta
                else {
                    //Día menos valor del día mas 6
                $fin=$resta2-$hoy1+6;
                }   
            }
            else {
                $fin=$resta3-$hoy1-3;
            }
                //Si es fin de semana
                if ($fin%7==0||$fin%7==6) {
                    $a="Si";
                }
                //Si no es fin de semana
                else {
                    $a="No";
                }
            
            echo"<tr>";
                echo"<td>¿Es fin de semana?</td>";
                echo"<td>$a</td>";
            echo"</tr>";
        }
            echo"</tbody>";
        echo"</table>";


        
        
                
            
            
    }

?>
</body>
</html>