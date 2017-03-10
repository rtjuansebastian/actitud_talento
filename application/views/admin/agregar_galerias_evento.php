<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Galeria del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/subir_galerias_evento" enctype="multipart/form-data">                            
                <div class="row" id="testimonios">
                    <div class="col-md-6" id="testimonio1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen 1</p></label>
                            <input type="file" class="form-control" name="imagen1" id="imagen"/>
                        </div> 
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen 2</p></label>
                            <input type="file" class="form-control" name="imagen2" id="imagen"/>
                        </div> 
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen 3</p></label>
                            <input type="file" class="form-control" name="imagen3" id="imagen"/>
                        </div> 
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen 4</p></label>
                            <input type="file" class="form-control" name="imagen4" id="imagen"/>
                        </div>                         
                    </div>                
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
<?php $this->load->view("admin/footer");?> 