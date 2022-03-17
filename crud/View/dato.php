<h1 class="page-header">TABLA TEST</h1>
<br>
<br>
<div class="well well-sm text-right">
    <a class="btn btn-success" href="?c=Dato&a=Crud">Crear ticket</a>
</div>

<table class="table text-center" >
    <thead>
        <tr>
            <th scope="col" >a</th>
            <th scope="col">b</th>
            <th scope="col "  colspan="2" >Opciones</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->a; ?></td>
            <td><?php echo $r->b; ?></td>
            
            <td>
            <i ><a href="?c=Dato&a=Eliminar&id=<?php echo $r->id; ?>"><input type="button" class="btn btn-danger"value="Eliminar"></a></i>
            </td>
            <td>
                <i ><a href="?c=Dato&a=Crud&id=<?php echo $r->id; ?>"><input type="button"  class="btn btn-success" value="Actualizar"> </a></i>
               
            </td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
