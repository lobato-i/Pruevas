


<form action="?c=Dato&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>a</label>
        <input type="number" name="aa" value="<?php echo $alm->a; ?>" class="form-control" placeholder="Campo numerico"  />
    
    </div>
    
    <div class="form-group">
        <label>b</label>
        <input type="text" name="bb" value="<?php echo $alm->b; ?>" class="form-control" placeholder="Campo alfanumerico"  />
    </div>
    
  
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

