<?php $this->load->view("templates/header.php"); ?>

	<div class="col-lg-5">
		<form method="post" action="Alumno/GuardarAlumno">
				<div class="form-group col-lg-8">
					<label>Nombres</label>
					<input type="text" name="nombre" class="form-control" required="true">
				</div>
				<div class="form-group col-lg-8">
					<label>apellido</label>
					<input type="text" name="apellido" class="form-control" required="true">
				</div>
				<div class="form-group col-lg-8">
					<label>cumpleaños</label>
					<input type="text" name="cumpleanos" class="form-control" required="true">
				</div>
				<div class="form-group col-lg-8">
					<label>grado</label>
					<input type="text" name="grado" class="form-control" required="true">
				</div>	
				<div class="form-group col-lg-8">
					<label>nivel</label>
					<input type="text" name="nivel" class="form-control" required="true">
				</div>
				<!-- <div class="clear-fix"></div> -->

				<input type="submit"  class="btn btn-primary" value="Enviar" >
				<input type="reseet"  class="btn btn-danger" value="Limpiar" >
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
			<?php 
				foreach ($alumnos as $alumno ) {
					echo "<tr>"."<td>".$alumno->id_alumno."</td>"."<td>".$alumno->nombre."</td>".
						"<td>".$alumno->apellido."</td>"."<td>".$alumno->cumpleanos."</td>"."<td>".$alumno->grado."</td>"."<td>".$alumno->nivel."</td>".
						"<td><a href ='#".$alumno->id_alumno."'><span class ='glyphicon glyphicon-user'></span>Modificar</a></td>".
						"<td><a href ='#".$alumno->id_alumno."'><span class ='glyphicon glyphicon-trash'></span>Eliminar</a></td>".

					"</tr>";


				}



			 ?>

		</table>		


	</div>

<?php $this->load->view("templates/footer.php"); ?>

