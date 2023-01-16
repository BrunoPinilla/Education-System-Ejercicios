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
class Conexion{
private $host= "localhost";
private $user = "root";
private $password = "";
private $db = "db_fastfood";
private $connect;

public function __construct()
{
$connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
try{
$this->connect = new PDO($connectionString,$this->user,$this->password);
//Detectar los errores posibles y en donde se encuentran
$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexion exitosa";
}catch (Exception $e){
$this->connect = 'Error de conexion';
echo "ERROR: ". $e->getMessage();
}
}
}
$connect = new Conexion();
?>
</body>
</html>