<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="<?=  base_url()?>admin/agregar_conferencista" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="profesion">Profesión</label>
                            <input type="text" class="form-control" id="profesion" name="profesion" required=""/>                            
                        </div>
                        <div class="form-group">
                            <label for="perfil">Perfil</label>
                            <input type="text" class="form-control" id="perfil" name="perfil" required=""/>                                                        
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                            <input type="file" class="form-control" name="imagen" id="imagen"/>
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook"/>                                
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter"/>                            
                        </div>
                        <div class="form-group">
                            <label for="google_plus">Google Plus</label>
                            <input type="text" class="form-control" id="google_plus" name="google_plus"/>                            
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin"/>                            
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram"/>                            
                        </div>  
                        <button class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer");?>