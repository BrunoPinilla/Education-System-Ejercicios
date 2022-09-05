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
//PUNTO A
$hotwheels = array ('Dodge'=>'Amarillo','Civic'=>'Blanco','Silvia R15'=>'Amarillo con Negro','Audi R8'=>'Blanco Perla','Formula 1'=>'Rosa','IceCream'=>'Blanco con Morado','Honda Monkey'=>'Blanco con Rojo','Avion RTU2000'=>'Amarillo con azul','Formula E'=>'Negro','DODGE RAM'=>'Naranja');

foreach ($hotwheels as $auto => $color)
{
	echo $auto . '<br>';
}

//PUNTO B
$hotwheels = array ('Dodge'=>'Amarillo','Civic'=>'Blanco','Silvia R15'=>'Amarillo con Negro','Audi R8'=>'Blanco Perla','Formula 1'=>'Rosa','IceCream'=>'Blanco con Morado','Honda Monkey'=>'Blanco con Rojo','Avion RTU2000'=>'Amarillo con azul','Formula E'=>'Negro','DODGE RAM'=>'Naranja');

foreach ($hotwheels as $auto => $color)
{
	echo $color . '<br>';
}
?>
</body>
</html>