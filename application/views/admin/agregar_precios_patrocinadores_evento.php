<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Precios de auspicio del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_precios_patrocinadores_evento">                            
                <div class="row" id="precios_patrocinadores">
                    <div class="col-md-6" id="precio1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div class="form-group">
                            <label for="nombre">Nombre 1</label>
                            <input type="text" class="form-control" id="nombre" name="nombre[]" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción 1</label>
                            <textarea class="form-control" id="descripcion" name="descripcion[]" required=""></textarea>
                        </div>                        
                        <div class="form-group">
                            <label for="precio">Precio 1</label>
                            <input type="number" class="form-control" id="precio" name="precio[]" required=""/>
                        </div>                        
                    </div>                
                </div>
                <button type="button" class="btn btn-default" id="agregar_precio">Agregar otra precio</button>
                <button type="button" class="btn btn-danger" id="eliminar_precio">Eliminar otra precio</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){
        var i=2;
        $("#agregar_precio").click(function(){
            var precio=  '<div class="col-md-6" id="precio'+i+'">  '+
                                '<input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">'+
                                '<div class="form-group">'+
                                    '<label for="nombre">Nombre '+i+'</label>'+
                                    '<input type="text" class="form-control" id="nombre" name="nombre[]" required=""/>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="descripcion">Descripcion '+i+'</label>'+
                                    '<textarea class="form-control" id="descripcion" name="descripcion[]" required=""></textarea>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="precio">Precio '+i+'</label>'+
                                    '<input type="number" class="form-control" id="precio" name="precio[]" required=""/>'+
                                '</div>'+
                            '</div>';
            $("#precios_patrocinadores").append(precio);
            i++;
        });
        
        $(document).on("click","#eliminar_precio", function(e){
            $("#precio"+i).remove();
            i=i-1;
        });        
    });
</script> 