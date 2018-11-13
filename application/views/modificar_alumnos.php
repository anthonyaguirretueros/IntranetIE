<?php $this->load->view("templates/header.php"); ?>

         
                <div class="col-lg-5">
                    <!--<form method="post" action="GuardarAlumno">-->
                              <!-- modificar ruta  Alumno/ActualizarAlumno-->
                    <form method="post"  name="" action="<?php echo base_url();?>Alumno/ActualizarAlumno">

                            <div class="form-group col-lg-3">
                            <label>ID_Alumno</label>
                            <input readonly="true" type="text" name="id_alumno" class="form-control" value="<?php echo $alumnos->id_alumno; ?>">
                        </div>
                        <div class="form-group col-lg-8">
                            <label>Nombres</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required="true" value="<?php echo $alumnos->nombre; ?>" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" required="true" value="<?php echo $alumnos->apellido; ?>" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>cumpleaños</label>
                            <input type="text" name="cumpleanos" id="cumpleanos" class="form-control" required="true" value="<?php echo $alumnos->cumpleanos; ?>" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>grado</label>
                            <input type="text" name="grado" id="grado" class="form-control" required="true" value="<?php echo $alumnos->grado; ?>" >
                        </div>	
                        <div class="form-group col-lg-12">
                            <label>nivel</label>
                            <input type="text" name="nivel" id="nivel" class="form-control" required="true" value="<?php echo $alumnos->nivel; ?>" >
                        </div>
                        <!-- <div class="clear-fix"></div> -->
                        <div class="form-group col-lg-12">
<!--                             llevar aqui el controlador -->
                            <input type="submit" class="btn btn-primary" value="guardar">
                            <!--<input type="button"  class="btn btn-primary" value="Enviar" onclick="addAlumno()">-->
                            <input type="reset"  class="btn btn-danger" value="Limpiar" >
                        </div>
                    </form>
                </div>

   
            
