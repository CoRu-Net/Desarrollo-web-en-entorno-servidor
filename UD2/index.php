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
$a=rand(0,10);

 if($a = 0 || $a ){
    echo"Numero 1 ha sido el mayor $a";
 }elseif($b>$a && $b>$c){
     echo"Numero 2 ha sido el mayor $b";
 }else{
     echo"Numero 3 ha sido el mayor $c";
 }
 ?>

</body>
</html>