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
class clasePadre{
    protected function metodoProtected(){
    return "5*5*5*5 = 625";
    }
    }
    class claseHija extends clasePadre{
    public function muestra(){
    return parent::metodoProtected();
    }
    }
    $obj = new claseHija();
    echo $obj->muestra();
?>
</body>
</html>