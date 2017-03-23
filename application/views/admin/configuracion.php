<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pagina de inicio</h1>
                    <form method="post" action="<?=  base_url()?>admin/actualizar_configuracion" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$configuracion['id']?>">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" value="<?=$configuracion['nombre']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input class="form-control" type="tel" name="telefono" id="telefono" value="<?=$configuracion['telefono']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input class="form-control" type="text" name="correo" id="correo" value="<?=$configuracion['correo']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" value="<?=$configuracion['direccion']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input class="form-control" type="text" name="facebook" id="facebook" value="<?=$configuracion['facebook']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input class="form-control" type="text" name="twitter" id="twitter" value="<?=$configuracion['twitter']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input class="form-control" type="text" name="linkedin" id="linkedin" value="<?=$configuracion['linkedin']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Instragram</label>
                            <input class="form-control" type="text" name="instagram" id="instagram" value="<?=$configuracion['instagram']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Imagen 1</label>
                            <img src="<?=  base_url()?>assets/img/<?=$configuracion['imagen_1']?>" height="80px" width="160px">
                            <input class="form-control" type="file" name="imagen_1" id="imagen_1"/>
                        </div>
                        <div class="form-group">
                            <label>Imagen 2</label>
                            <img src="<?=  base_url()?>assets/img/<?=$configuracion['imagen_2']?>" height="80px" width="160px">
                            <input class="form-control" type="file" name="imagen_2" id="imagen_2"/>
                        </div>
                        <div class="form-group">
                            <label>Imagen 3</label>
                            <img src="<?=  base_url()?>assets/img/<?=$configuracion['imagen_3']?>" height="80px" width="160px">
                            <input class="form-control" type="file" name="imagen_3" id="imagen_3"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer");?>