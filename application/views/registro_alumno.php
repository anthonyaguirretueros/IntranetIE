
<?php $this->load->view('templates/header.php'); ?>


    <?php $this->load->view('templates/navbar.php'); ?>


<div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Registro de usuarios</h2>   
                </div>
            </div>   
            <hr/>
            <div class="container-fluid">
                <div class="col-lg-5">
                    <form method="post" action="registrarusuario" id="" name="">
                          <div class="form-group col-lg-12">
                            <label>Usuario</label>
                            <input type="text" name="username" id="username" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Nombres</label>
                            <input type="text" name="nombres" id="nombres" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>apellido</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>password</label>
                            <input type="password" name="password" id="password" class="form-control" required="true">
                        </div>	
                       
                        <!-- <div class="clear-fix"></div> -->
                        <div class="form-group col-lg-12">
                     <!--        <button type="button" class="btn btn-primary" onclick="addAlumno()">Enviar</button> -->
                            <input type="submit"  class="btn btn-primary" value="Registrarme" >
                            <input type="reset"  class="btn btn-danger" value="Limpiar" >
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>