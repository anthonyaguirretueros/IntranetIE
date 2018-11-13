<div id="profesorModal" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Profesor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post"  id="profesorFormModal" name="alumnoFormModal" action="">
                    <div class="form-group col-lg-3">
                        <label>ID_Alumno</label>
                        <input type="hidden" id="m_id_profesor" name="m_id_profesor">
                        <input readonly="true" type="text" id="m_cod_profesor" name="m_cod_profesor" class="form-control" value="">
                    </div>
                    <div class="form-group col-lg-8">
                        <label>Nombres</label>
                        <input type="text" name="m_nombre" id="m_nombre" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Apellido</label>
                        <input type="text" name="m_apellido" id="m_apellido" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Email</label>
                        <input type="text" name="m_email" id="m_email" class="form-control" required="true" value="" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Telefono</label>
                        <input type="text" name="m_telefono" id="m_telefono" class="form-control" required="true" value="" >
                    </div>	
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-toolbar pull-right">

                    <input onclick="modifyProfesor()" type="button" class="btn btn-success" value="Guardar">
                    <input onclick="closeModal()" type="button"  class="btn btn-danger" value="Cancelar" >
                </div>
            </div>
        </div>

    </div>
</div>
