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
$monday = lunes;
$tuesday = martes;
$wednesday = miercoles;
$tursday = jueves;
$friday = viernes;

if ($monday > $friday){
echo'El dia de hoy es lunes';
}
else{
echo'El dia de hoy es viernes';
}

//PUNTO B
$monday = lunes;
$tuesday = martes;
$wednesday = miercoles;
$tursday = jueves;
$friday = viernes;

if ($tuesday > $monday){
echo'El dia de hoy es martes';
}
else{
echo'El dia de hoy es lunes';
}

//PUNTO C
$monday = lunes;
$tuesday = martes;
$wednesday = miercoles;
$tursday = jueves;
$friday = viernes;

if ($wednesday < $tursday){
echo'El dia de hoy es miercoles';
}
else{
echo'El dia de hoy es jueves';
}

//PUNTO D
$dia = 'jueves';
switch($dia){
case'lunes':
echo'Hoy es dia Lunes';
break;

case'martes':
echo'Hoy es dia Martes';
break;

case'miercoles':
echo'Hoy es dia Miercoles';
break;

case'jueves':
echo'Hoy es dia Jueves';
break;

case'viernes':
echo'Hoy es dia Viernes';
break;

default:
echo'Hoy es un dia del fin de semana';
break;
}

// PUNTO E
$dia = 'viernes';
switch($dia){
case'lunes':
echo'Hoy es dia Lunes';
break;

case'martes':
echo'Hoy es dia Martes';
break;

case'miercoles':
echo'Hoy es dia Miercoles';
break;

case'jueves':
echo'Hoy es dia Jueves';
break;

case'viernes':
echo'Hoy es dia Viernes';
break;

default:
echo'Hoy es un dia del fin de semana';
break;
}

// PUNTO F
$dia = '';
switch($dia){
case'lunes':
echo'Hoy es dia Lunes';
break;

case'martes':
echo'Hoy es dia Martes';
break;

case'miercoles':
echo'Hoy es dia Miercoles';
break;

case'jueves':
echo'Hoy es dia Jueves';
break;

case'viernes':
echo'Hoy es dia Viernes';
break;

default:
echo'Hoy es un dia del fin de semana';
break;
}

?>
</body>
</html>