<?php $this->load->view("templates/header.php"); ?>

<div id="wrapper">
    <?php $this->load->view('templates/navbar.php'); ?>
    <?php $this->load->view('templates/slider.php'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Registro de Profesores</h2>   
                </div>
            </div>   
            <hr/>
            <div class="container-fluid">
                <div class="col-lg-5">
                    <form method="post" id="profesorForm" name="profesorForm">
                        <div class="form-group col-lg-12">
                            <label>Nombres</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" required="true">
                        </div>	
                        <!-- <div class="clear-fix"></div> -->
                        <div class="form-group col-lg-12">
                            <button type="button" class="btn btn-success" onclick="addProfesor()">Guardar</button>
                            <button type="reset" class="btn btn-info">Limpiar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <table id="profesorTable" border="1" class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>EMAIL</th>
                                <th>TELEFONO</th>
                                <th colspan="2">Opciones</th>
                            </tr>
                        </thead>    
                        <tbody>    
                            <!-- PHP siempre con php// HTML con html -->
                            <?php $i = 1; ?>
                            <?php foreach ($profesores as $profesor) { ?>
                                <tr>
                                    <td><?php echo $profesor["cod_profesor"] ?></td>
                                    <td><?php echo $profesor["nombre"] ?></td>
                                    <td><?php echo $profesor["apellido"] ?></td>
                                    <td><?php echo $profesor["email"] ?></td>
                                    <td><?php echo $profesor["telefono"] ?></td>
                                    <td>
                                        <button onclick='getProfesor(<?php echo json_encode($profesor["id_profesor"]); ?>)' type="button" class="btn btn-primary">
                                            <span class ='glyphicon glyphicon-user'></span> Modificar
                                        </button>
                                    </td>
                                    <td>
                                        <button onclick='removeProfesor(<?php echo json_encode($profesor["id_profesor"]); ?>)' type="button" class="btn btn-danger">
                                            <span class ='glyphicon glyphicon-trash'></span> Eliminar
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>		
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("modal/profesorModal"); ?> 
</div>
<?php $this->load->view("templates/resources"); ?>

<script src="<?php echo base_url() . "assets/jsrequired/profesores.js"; ?>"></script>

