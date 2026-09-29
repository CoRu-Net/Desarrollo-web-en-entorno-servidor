<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC</title>
</head>
<body>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        meter{
           width: 90px;
           height: 40px; 
        }
       </style> 
    
 <?php
 echo"Simulación de Calificacio";
$a=rand(0,10);
 echo"La nota generada es: $a";
 if($a = 0 || $a < 5){
     echo"Calificación; Insuficiente"; 
 }elseif($a=5 || $a < 6){
     echo"Numero 2 ha sido el mayor $b";

 }elseif($a=6 || $a < 7){
     echo"Calificación: Bien";
 }
  elseif($a=7 || $a < 9){
     echo"Calificación: Notable";
     else{
        echo"Calificación: Sobresaliente";
     }
 }
 ?>

</body>
</html>