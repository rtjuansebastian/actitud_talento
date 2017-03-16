<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">                
                <div class="col-md-6 col-md-offset-3">
                    <h1>Agregar Usuario</h1>
                    <form method="post" action="<?=  base_url()?>admin/agregar_usuario">
                        <div class="form-group">
                            <label for="numero_identificacion">Numero de identificación</label>
                            <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"/>
                        </div>                            
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer");?>