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
//CICLO WHILE
//PUNTO A
$numero = 5;
while($numero <=120  ){
echo " $numero";
$numero = $numero * 5;
}

//PUNTO B
$numero = 100;
while($numero > 49 ){
echo " $numero";
$numero = $numero - 1;
}

//CICLO DO WHILE
//PUNTO A
$contador = 1;
do {
echo $contador + $contador;
echo " ";
$contador++;
} 
while($contador <= 5);

//PUNTO B


//CICLO FOR
//PUNTO A
for ($i=50; $i <= 500; $i+=50){
    $i/10;
    echo " $i";
    }


//PUNTO B
for ($i=1; $i <= 15; $i++){
    echo "Ciclo $i <br>";
    }
?>
</body>
</html>