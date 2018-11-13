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
                <form method="post"  id="alumnoFormModal" name="alumnoFormModal" action="">
                    <div class="form-group col-lg-3">
                        <label>ID_Alumno</label>
                        <input type="hidden" id="m_id_alumno" name="m_id_alumno">
                        <input readonly="true" type="text" id="m_cod_alumno" name="m_cod_alumno" class="form-control" value="">
                    </div>
                    <div class="form-group col-lg-8">
                        <label>Nombres</label>
                        <input type="text" name="m_nombre" id="m_nombre" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>apellido</label>
                        <input type="text" name="m_apellido" id="m_apellido" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>cumpleaños</label>
                        <input type="text" name="m_cumpleanos" id="m_cumpleanos" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>grado</label>
                        <input type="text" name="m_grado" id="m_grado" class="form-control" required="true" value="" >
                    </div>	
                    <div class="form-group col-lg-12">
                        <label>nivel</label>
                        <input type="text" name="m_nivel" id="m_nivel" class="form-control" required="true" value="" >
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-toolbar pull-right">

                    <input onclick="modifyAlumno()" type="button" class="btn btn-success" value="Guardar">
                    <input onclick="closeModal()" type="button"  class="btn btn-danger" value="Cancelar" >
                </div>
            </div>
        </div>

    </div>
</div>
