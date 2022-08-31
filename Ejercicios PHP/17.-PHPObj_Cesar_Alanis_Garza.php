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
class classSTP{
public function transaccion(){
return "Esta es la clase STP";
}
}
class classSTU extends classSTP{
public function transaccion(){
return "Esta es la clase STU";
}
}

$obj = new classSTU();
echo $obj->transaccion();
?>
</body>
</html>