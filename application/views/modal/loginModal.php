<div id="loginModal" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="" name="loginFormModal">
                    <div class="form-group col-lg-12">
                        <label>Usuario</label>
                        <input type="text" name="username" id="username" class="form-control" required="true">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>password</label>
                        <input type="password" name="password" id="password" class="form-control" required="true">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>pefil</label>
                        <input type="text" name="id_perfil" id="id_perfil" class="form-control" required="true">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-toolbar pull-right">
                    <input onclick="addUsuario()" type="button" class="btn btn-primary" value="Registrarme">
                    <input onclick="closeModal()" type="button"  class="btn btn-danger" value="Cancelar" >
                </div>
            </div>
        </div>

    </div>
</div>
