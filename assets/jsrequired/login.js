
$(document).ready(function () {

});


var addUsuario = function () {
    var params = {
        username: $("#username").val(),
        password: $("#password").val(),
        estado: 1,
        id_perfil: $("#id_perfil").val()
    };

    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "login/insertusuario",
            type: "POST",
            async: true,
            dataType: 'json',
            data: params,
            success: function (response) {
                if (response.hasOwnProperty("error")) {
                    getGrowl("Error", response["error"], "danger");
                } else {
                    getGrowl("Sistema", response["message"], "success");
                    clearForm('loginFormModal');
                }
            }
        });
    }
};

var showModal = function () {
    $("#loginModal").modal();
};
var closeModal = function () {
    $("#loginModal").modal('hide');
};
