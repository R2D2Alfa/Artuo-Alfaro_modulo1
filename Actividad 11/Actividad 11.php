<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$x=0;
$y=0;
$z=0;
$a=0;
$w=0;
    $array=[$_POST["P1"],$_POST["P2"],$_POST["P3"],$_POST["P4"],$_POST["P5"],
    $_POST["P6"],$_POST["P7"],$_POST["P8"],$_POST["P9"],$_POST["P10"]];
        for ($a=0; $a < 10; $a++) { 
            if ($array[$a]=="A") {
                $w=$w+1;
            }
            elseif ($array[$a]=="B") {
                $x=$x+1;
            }
            elseif ($array[$a]=="C") {
                $y=$y+1;
            }
            else{
                $z=$z+1;
            }
        }
                //3  3  5    4
        $array2=[$w, $x, $y, $z];

        $i = 0; 
        $mayor = $array2[0];
        $aux = array();

        foreach($array2 as $llave => $value) {
            if($value > $mayor){
                $mayor = $value;
                $aux = array();
                array_push($aux,$i);
            }else if($value == $mayor){
                array_push($aux,$i);
            }
            $i++;
        }

        if(sizeof($aux) == 1){
            if($aux[0] == 0){
                echo "Eres un taco al pastor";
            }
            else if($aux[0] == 1){
                echo "Eres un taco de suadero";
            }
            else if($aux[0] == 2){
                echo "Eres un taco de barbacoa";
            }
            else if($aux[0] == 3){
                echo "Eres un taco languero";
            }
        }else if(sizeof($aux) == 2){
            if($aux[0] == 0 && $aux[1] == 1){
                echo "Eres un taco campechano";
            }
            if($aux[0] == 0 && $aux[1] == 2){
                echo "Eres un taco placero";
            }
            if($aux[0] == 0 && $aux[1] == 3){
                echo "Eres un taco light";
            }
            if($aux[0] == 1 && $aux[1] == 2){
                echo "Eres un taco de carnitas";
            }
            if($aux[0] == 1 && $aux[1] == 3){
                echo "Eres un taco de mixiote";
            }
            if($aux[0] == 2 && $aux[1] == 3){
                echo "Eres un taco bell";
            }
        }else{
            echo "Eres un taco de sal";
        }

        echo"<br>";
 

?>
</body>
</html>
<?php 
  

   


?>