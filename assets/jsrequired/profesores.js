/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
});

var addProfesor = function () {
    var codigo = $("#nombre").val();
    codigo = codigo.substr(0,1);
    codigo += $("#apellido").val();
    codigo = codigo.substr(0,5);
    
    var params = {
        cod_profesor: codigo,
        nombre: $("#nombre").val(),
        apellido: $("#apellido").val(),
        email: $("#email").val(),
        telefono: $("#telefono").val()
    };

    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "profesor/insertprofesor",
            type: "POST",
            async: true,
            dataType: 'json',
            data: params,
            success: function (response) {
                if (response.hasOwnProperty("error")) {
                    getGrowl("Error", response["error"], "danger");
                } else {
                    setDataTable(response["data"]);
                    getGrowl("Sistema", response["message"], "success");
                    clearForm('profesorForm');
                }
            }
        });
    }
};

var modifyProfesor = function () {
    var params = {
        id_profesor: $("#m_id_profesor").val(),
        cod_profesor: $("#m_cod_profesor").val(),
        nombre: $("#m_nombre").val(),
        apellido: $("#m_apellido").val(),
        email: $("#m_email").val(),
        telefono: $("#m_telefono").val()
    };
    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "profesor/updateprofesor",
            type: "POST",
            async: true,
            dataType: 'json',
            data: params,
            success: function (response) {
                if (response.hasOwnProperty("error")) {
                    getGrowl("Error", response["error"], "danger");
                } else {
                    setDataTable(response["data"]);
                    getGrowl("Sistema", response["message"], "success");
                    clearForm('profesorFormModal');
                    closeModal();
                }
            }
        });
    }
};

var removeProfesor = function (id) {
    var params = {
        id_profesor: id
    };
    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "profesor/deleteprofesor",
            type: "POST",
            async: true,
            dataType: 'json',
            data: params,
            success: function (response) {
                if (response.hasOwnProperty("error")) {
                    getGrowl("Error", response["error"], "danger");
                } else {
                    setDataTable(response["data"]);
                    getGrowl("Sistema", response["message"], "success");
                }
            }
        });
    }
};


var setDataTable = function (data) {
    var trs = "";
    var i = 1;
    for (var row in data) {
        var alumno = data[row];
        trs += "<tr>";
        trs += "<td>" + alumno["cod_profesor"] + "</td>";
        trs += "<td>" + alumno["nombre"] + "</td>";
        trs += "<td>" + alumno["apellido"] + "</td>";
        trs += "<td>" + alumno["email"] + "</td>";
        trs += "<td>" + alumno["telefono"] + "</td>";

        trs += "<td>";
        trs += "<button onclick='getProfesor(" + alumno["id_profesor"] + ")' type='button' class='btn btn-primary'>";
        trs += "<span class ='glyphicon glyphicon-user'></span> Modificar";
        trs += "</button>";
        trs += "</td>";
        trs += "<td>";
        trs += "<button onclick='removeProfesor(" + alumno["id_profesor"] + ")' type='button' class='btn btn-danger'>";
        trs += "<span class ='glyphicon glyphicon-trash'></span> Eliminar";
        trs += "</button>";
        trs += "</td>";
        trs += "</tr>";
    }
    $("#profesorTable tbody > tr").remove();
    $("#profesorTable tbody").html(trs);
};

var getProfesor = function (id) {
    $.ajax({
        url: "profesor/getprofesor",
        type: "POST",
        async: true,
        dataType: 'json',
        data: {id_profesor: id},
        success: function (response) {
            var alumno = response;
            if (!isArrayEmpty(alumno)) {
                $("#m_id_profesor").val(alumno["id_profesor"]);
                $("#m_cod_profesor").val(alumno["cod_profesor"]);
                $("#m_nombre").val(alumno["nombre"]);
                $("#m_apellido").val(alumno["apellido"]);
                $("#m_email").val(alumno["email"]);
                $("#m_telefono").val(alumno["telefono"]);
                showModal();
            }
        }
    });

};

var showModal = function () {
    $("#profesorModal").modal();
};
var closeModal = function () {
    $("#profesorModal").modal('hide');
};
