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
  $traduccion2=$_POST["traduccion"];
   //Selección de traducción Español-Morse
    if ($traduccion2 == "em") {
      
    // Se cambia el texto ingresado a Mayúsculas
  $Español=strtoupper($_POST["codigo"]);
  // Imprime el codigo ingresado e indica que se va a traducir
  echo "<table>";
    echo"<thead>";
      echo"<th><h1><strong>Su texto a traducir es:</strong></h1></th>";
    echo"</thead>";
    echo"<tbody>";
      echo"<tr>";
        echo"<td>$Español</td>";
      echo"</tr>";
    echo"</tbody>";
  echo"</table>";
  //Arreglo con cada una de los valores y su correspondiente en morse
  $array=     ["A" => " .-",
  "B" => " -...",
  "C" => " -.-.",
  "D" => " -..",
  "E" => " .",
  "F" => " ..-.",
  "G" => " --.",
  "H" => " ....",
  "I" => " ..",
  "J" => " .---",
  "K" => " -.-",
  "L" => " .-..",
  "M" => " --",
  "N" => " -.",
  "O" => " ---",
  "P" => " .--.",
  "Q" => " --.-" ,
  "R" => " .-.",
  "S" => " ...",
  "T" => " -",
  "U" => " ..-",
  "V" => " ...-",
  "W" => " .--",
  "X" => " -..-",
  "Y" => " -.--",
  "Z" => " --..",
  "1" => " .----.",
  "2" => " ..---",
  "3" => " ...--",
  "4" => " ....-",
  "5" => " .....",
  "6" => " -....",
  "7" => " --...",
  "8" => " ---..",
  "9" => " ----.",
  "0" => " -----",
  "!" => " --..--",
  "." => " .-.-.-",
  "?" => " ..--..",
  "," => " -.-.--",
  '"' => " .-..-.",
  " " => "&nbsp&nbsp"
   ];

   echo"<h1><strong>Su texto traducido es:</strong></h1>";
   //Se separa cada letra para poderse traducir individualmente
   $Español1 = str_split($Español);
   //Cada valor del codigo se va a correr por el array y se va a imprimir
   foreach ($Español1 as $key => $value) {
    print_r($array[$value]);
    }
  }

//Selección de traducción Morse-Español
  if($traduccion2 == "me"){
 // Imprime el codigo ingresado e indica que se va a traducir
    
    $codigo=($_POST["codigo"]);
    echo "<table>";
      echo"<thead>";
        echo"<th><h1><strong>Su texto a traducir es:</strong></h1></th>";
      echo"</thead>";
      echo"<tbody>";
        echo"<tr>";
          echo"<td>$codigo</td>";
        echo"</tr>";
      echo"</tbody>";
    echo"</table>";
  //Arreglo con todos los valores en morse y su correspondiente en español
  $array2 = [".-" => " A",
  "-..." => " B",
  "-.-." => " C",
  "-.." =>  " D",
  "." => " E",
  "..-." => " F",
  "--." => " G",
  "...."=> " H",
  ".." => " I",
  ".---" => " J",
  "-.-" => " K",
  ".-.." => " L",
  "--" => " M",
  "-." => " N",
  "---" => " O",
  ".--." => " P",
  "--.-" => " Q" ,
  ".-." => " R",
  "..." => " S",
  "-" => " T",
  "..-" => " U",
  "...-" => " V",
  ".--" => " W",
  "-..-" => " X",
  "-.--" => " Y",
  "--.." => " Z",
  ".----." => " 1",
  "..---" => " 2",
  "...--" => " 3",
  "....-" => " 4",
  "....." => " 5",
  "-...." => " 6",
  "--..." => " 7",
  "---.." => " 8",
  "----." => " 9",
  "-----" => " 10",
  "--..--" => " !",
  ".-.-.-" => " .",
  "..--.." => " ?",
  "-.-.--" => " ,",
  ".-..-." => ' "',
  "/" => " /",
  ];
    // Quita los espacios que hay entre cada letra en morse
    $morse=explode(" ", $codigo);
    echo"<h1><strong>Su texto traducido es:</strong></h1>";
    //Cada valor del codigo se va a correr por el array y se va a imprimir
   foreach ($morse as $key => $value) {
    print_r($array2[$value]);
   }
  }
 
  
  
?>
</body>
<form action="Actividad 12.html">
<input type="submit" name="Enviar" value="Regresar">
</form>
</html>
