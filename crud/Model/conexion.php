<?php
//clase conexion con el metodo StartUp que retorna las credenciales de conexion 
//instanciamos los atributos y retornamos
class Conexion
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=Prueba;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>
