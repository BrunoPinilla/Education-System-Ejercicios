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
class codigoPrincipal{
    public function metodoRetorno($valor){
    if($valor==1){
    return "XVGS";}
    elseif ($valor==2){
    return "HSKV";}
    elseif ($valor==3)
    return "SJOS";}
    }
    class codigosExternos extends codigoPrincipal{
    }
    $obj = new codigosExternos();
    echo $obj->metodoRetorno(2);
?>
</body>
</html>