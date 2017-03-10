<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Testimonios del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_testimonios_evento" enctype="multipart/form-data">                            
                <div class="row" id="testimonios">
                    <div class="col-md-6" id="testimonio1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div class="form-group">
                            <label for="nombre">Nombre 1</label>
                            <input type="text" class="form-control" id="nombre" name="nombre[]" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="capacidad">Testimonio 1</label>
                            <input type="text" class="form-control" id="testimonio" name="testimonio[]" required=""/>                                                        
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                            <input type="file" class="form-control" name="imagen1" id="imagen"/>
                        </div>                        
                    </div>                
                </div>
                <button type="button" class="btn btn-default" id="agregar_testimonio">Agregar otra testimonio</button>
                <button type="button" class="btn btn-danger" id="eliminar_testimonio">Eliminar otra testimonio</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){
        var i=2;
        $("#agregar_testimonio").click(function(){
            var testimonio=  '<div class="col-md-6" id="testimonio'+i+'">  '+
                                '<input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">'+
                                '<div class="form-group">'+
                                    '<label for="nombre">Nombre '+i+'</label>'+
                                    '<input type="text" class="form-control" id="nombre" name="nombre[]" required=""/>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="capacidad">Testimonio '+i+'</label>'+
                                    '<input type="text" class="form-control" id="testimonio" name="testimonio[]" required=""/>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>'+
                                    '<input type="file" class="form-control" name="imagen'+i+'" id="imagen"/>'+
                                '</div>'+
                            '</div>';
            $("#testimonios").append(testimonio);
            i++;
        });
        
        $(document).on("click","#eliminar_testimonio", function(e){
            $("#testimonio"+i).remove();
            i=i-1;
        });        
    });
</script>  