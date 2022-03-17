<?php
//clase dato que contiene las funciones para la implementacion del CRUD
class Dato{
//declaracion de variable privada en la que se instanciara la conexion a la DB	
private $pdo;
//declaracion de variables que concuerden con los datos de la tabla
public $id;
public $a;
public $b;
//metodo construct 
public function __CONSTRUCT(){
//ejecutamos el metdo startup de la clase conexion y almacenamos el procedimiento en pdo
    try {
        $this->pdo = Conexion::StartUp();
    } catch (Exception $e) {
        die($e->getMessage());
    }

}
//metodo listar, para la imprecion de datos en view/datos.php
public function Listar()
{
	//
    try {
        $result = array();
        $stm = $this->pdo->prepare("SELECT * FROM Test");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);

    } catch (Exception $e) {
        die($e->getMessage());
    }

}
//metodo getting, para la extracion de un datos en especifico dato.controller.php
     public function getting($id)
     {
        try {
        $stm = $this->pdo
       ->prepare("SELECT * FROM Test WHERE id = ?");
    

      $stm->execute(array($id));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
       die($e->getMessage());
    }
    }
	//metodo elimira utilizado en dato.controller.php
    public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Test WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
//metodo actualizar para actualizar datos 
    public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE Test SET 
						a    = ?, 
						b    = ?
                        
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->a, 
                        $data->b,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
//metodo registrar crear registros en la DB
    public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `Test` (id,a,b) 
		        VALUES (null,?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->a, 
                    $data->b,       
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}