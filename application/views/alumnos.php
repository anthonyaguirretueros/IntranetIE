<?php $this->load->view("templates/header.php"); ?>

<div id="wrapper">
    <?php $this->load->view('templates/navbar.php'); ?>
    <?php $this->load->view('templates/slider.php'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Registro de Alumnos</h2>   
                </div>
            </div>   
            <hr/>
            <div class="container-fluid">
                <div class="col-lg-5">
                    <form method="post" id="alumnoForm" name="alumnoForm">
                        <div class="form-group col-lg-12">
                            <label>Nombres</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>cumpleaños</label>
                            <input type="text" name="cumpleanos" id="cumpleanos" class="form-control" required="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>grado</label>
                            <input type="text" name="grado" id="grado" class="form-control" required="true">
                        </div>	
                        <div class="form-group col-lg-12">
                            <label>nivel</label>
                            <input type="text" name="nivel" id="nivel" class="form-control" required="true">
                        </div>
                        <!-- <div class="clear-fix"></div> -->
                        <div class="form-group col-lg-12">
                            <button type="button" class="btn btn-primary" onclick="addAlumno()">Enviar</button>
                            <!--<input type="button"  class="btn btn-primary" value="Enviar" onclick="addAlumno()">-->
                            <input type="reset"  class="btn btn-danger" value="Limpiar" >
                        </div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <table border="1"	class="table table-striped table-bordered table-hover table-condensed">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>CUMPLEAÑOS</th>
                            <th>GRADO</th>
                            <th>NIVEL</th>
                            <th colspan="2">Opciones</th>
                        </tr>
                        <!-- PHP siempre con php// HTML con html -->
                        <?php foreach ($alumnos as $alumno) { ?>
                            <tr>
                                <td><input hidden="" value="<?php echo $alumno->id_alumno ?>"><?php echo $alumno->id_alumno ?></td>
                                <td><?php echo $alumno->nombre ?></td>
                                <td><?php echo $alumno->apellido ?></td>
                                <td><?php echo $alumno->cumpleanos ?></td>
                                <td><?php echo $alumno->grado ?></td>
                                <td><?php echo $alumno->nivel ?></td>

                                <td>
                                    <button onclick="abrirModal()" type="button" class="btn btn-primary">
                                        <span class ='glyphicon glyphicon-user'></span> Modificar
                                    </button>
                                </td>
                                <td>
                                    <button onclick="" type="button" class="btn btn-primary">
                                        <span class ='glyphicon glyphicon-trash'></span> Eliminar
                                    </button>
                                </td>
                                <!--<td><a onclick=""><span class ='glyphicon glyphicon-user'></span>Eliminar</a></td>-->
                                <!--<td><a href ='Alumno/ModificarAlumno/<?php echo $alumno->id_alumno ?>'><span class ='glyphicon glyphicon-user'></span>Modificar</a></td>-->
                                <!--<td><a href ='Alumno/EliminarAlumno<?php echo $alumno->id_alumno ?>'><span class ='glyphicon glyphicon-trash'></span>Eliminar</a></td>-->
                            </tr>
                        <?php } ?>
                    </table>		
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("modal/alumnoModal"); ?> 
</div>
<?php $this->load->view("templates/resources"); ?>

<script src="<?php echo base_url() . "assets/jsrequired/alumnos.js"; ?>"></script>

