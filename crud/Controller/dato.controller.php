<?php
require_once("Model/datos.php");

class DatoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Dato();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/dato.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Dato();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->getting($_REQUEST['id']);
        }
        
        require_once 'View/header.php';
        require_once 'View/dato-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Dato();
        
        $alm->id = $_REQUEST['id'];
        $alm->a = $_REQUEST['aa'];
        $alm->b = $_REQUEST['bb'];
        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN
        if ($alm->id > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }
        
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
