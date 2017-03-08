<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="<?=  base_url()?>admin/agregar_patrocinador" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" rows="3" id="descripcion" name="descripcion"/></textarea>                            
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="url" name="url" required=""/>                                                        
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                            <input type="file" class="form-control" name="imagen_patrocinador" id="imagen" required=""/>
                        </div>
                        <button class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer");?>