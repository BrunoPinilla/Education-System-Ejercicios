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
class analisisUno{
    public $peso = "Dentro del reglamento";
    
    public function parametrosMedidos($pesok){
    if($pesok < 5000){
    return $this->peso;
    }
    }
    
    public function tareParametros($traerp){
    return self::parametrosMedidos($traerp);
    }
    }
    $objpeso = new analisisUno();
    echo $objpeso->tareParametros(2000);
?>
</body>
</html>