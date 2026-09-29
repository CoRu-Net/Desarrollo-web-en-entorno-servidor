<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC</title>
</head>
<body>
  <?php
// 1. Creación de las variables originales
$saldo = "1000";
$ingreso = 250;

// 2. Conversión de $saldo a número (entero)
$saldo_numerico = (int)$saldo;

// 3. Suma del ingreso
$total = $saldo_numerico + $ingreso;

// 4. Operador ternario para verificar si es mayor de 1200
echo $total > 1200 ? "Cliente VIP" : "Cliente normal";
?>