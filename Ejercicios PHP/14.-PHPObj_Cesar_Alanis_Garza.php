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
class clase1{
    private function mensajeInterno(){
    return "Mensaje Interno";
    }
    public function mandamensaje(){
    return self::mensajeInterno();
    }
    }
    $accion = new clase1();
    echo $accion->mandamensaje();
?>
</body>
</html>