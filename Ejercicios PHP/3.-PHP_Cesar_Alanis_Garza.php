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
$iot = array('Miguel<br>', 'Haroldo<br>', 'Mata<br>', 'Alfredo<br>', 'Gera<br>', 'Ene<br>','Mary<br>','Nidia<br>','Sam<br>', 'Cesar<br>' );
rsort($iot);
print_r($iot);

//PUNTO B
$iot = array('Miguel<br>', 'Haroldo<br>', 'Mata<br>', 'Alfredo<br>', 'Gera<br>', 'Ene<br>','Mary<br>','Nidia<br>','Sam<br>', 'Cesar<br>' );

$elimina = array_slice($iot, 7);
print_r($elimina);

//PUNTO C
$iot = array('Miguel<br>', 'Haroldo<br>', 'Mata<br>', 'Alfredo<br>', 'Gera<br>', 'Ene<br>','Mary<br>','Nidia<br>','Sam<br>', 'Cesar<br>' );

$divide = array_chunk($iot, 1);
print_r($divide);

//PUNTO D
$iot = array('Miguel<br>', 'Haroldo<br>', 'Mata<br>', 'Alfredo<br>', 'Cesar<br>');

$iot2 = array('Gera<br>', 'Ene<br>','Mary<br>','Nidia<br>','Sam<br>');

$merge = array_merge($iot, $iot2);
print_r($merge);

//PUNTO E
$iot = array('Miguel<br>', 'Haroldo<br>', 'Mata<br>', 'Alfredo<br>', 'Cesar<br>');

$buscar = array_search('Cesar<br>', $iot);
print_r($buscar);
?>
</body>
</html>