<div id="alumnoModal" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post"  name="alumnoFormModal" action="">
                    <div class="form-group col-lg-3">
                        <label>ID_Alumno</label>
                        <input readonly="true" type="text" name="id_alumno" class="form-control" value="">
                    </div>
                    <div class="form-group col-lg-8">
                        <label>Nombres</label>
                        <input type="text" name="m_nombre" id="nombre" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>apellido</label>
                        <input type="text" name="m_apellido" id="apellido" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>cumpleaños</label>
                        <input type="text" name="m_cumpleanos" id="cumpleanos" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>grado</label>
                        <input type="text" name="m_grado" id="grado" class="form-control" required="true" value="" >
                    </div>	
                    <div class="form-group col-lg-12">
                        <label>nivel</label>
                        <input type="text" name="m_nivel" id="nivel" class="form-control" required="true" value="" >
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-toolbar pull-right">
                    <input type="submit" class="btn btn-primary" value="guardar">
                    <input type="reset"  class="btn btn-danger" value="Limpiar" >
                </div>
            </div>
        </div>
        
    </div>
</div>
