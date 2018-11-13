/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('#alumnoModal').on('shown.bs.modal', function () {
//        $('#myInput').trigger('focus');
    });
});

var addAlumno = function () {
    var codigo = $("#nombre").val();
    codigo = codigo.substr(0,1);
    codigo += $("#apellido").val();
    codigo = codigo.substr(0,4);
    codigo += $("#nivel").val();
    
    var params = {
        cod_alumno: codigo,
        nombre: $("#nombre").val(),
        apellido: $("#apellido").val(),
        cumpleanos: $("#cumpleanos").val(),
        grado: $("#grado").val(),
        nivel: $("#nivel").val()
    };

    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "alumno/insertalumno",
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
                    clearForm('alumnoForm');
                }
            }
        });
    }
};

var modifyAlumno = function () {
    var params = {
        id_alumno: $("#m_id_alumno").val(),
        cod_alumno: $("#m_cod_alumno").val(),
        nombre: $("#m_nombre").val(),
        apellido: $("#m_apellido").val(),
        cumpleanos: $("#m_cumpleanos").val(),
        grado: $("#m_grado").val(),
        nivel: $("#m_nivel").val()
    };
    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "alumno/updatealumno",
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
                    clearForm('alumnoFormModal');
                    closeModal();
                }
            }
        });
    }
};

var removeAlumno = function (id) {
    var params = {
        id_alumno: id
    };
    if (!isArrayEmpty(params)) {
        $.ajax({
            url: "alumno/deletealumno",
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
        trs += "<td>" + alumno["cod_alumno"] + "</td>";
        trs += "<td>" + alumno["nombre"] + "</td>";
        trs += "<td>" + alumno["apellido"] + "</td>";
        trs += "<td>" + alumno["cumpleanos"] + "</td>";
        trs += "<td>" + alumno["grado"] + "</td>";
        trs += "<td>" + alumno["nivel"] + "</td>";

        trs += "<td>";
        trs += "<button onclick='getAlumno(" + alumno["id_alumno"] + ")' type='button' class='btn btn-primary'>";
        trs += "<span class ='glyphicon glyphicon-user'></span> Modificar";
        trs += "</button>";
        trs += "</td>";
        trs += "<td>";
        trs += "<button onclick='removeAlumno(" + alumno["id_alumno"] + ")' type='button' class='btn btn-danger'>";
        trs += "<span class ='glyphicon glyphicon-trash'></span> Eliminar";
        trs += "</button>";
        trs += "</td>";
        trs += "</tr>";
    }
    $("#alumnoTable tbody > tr").remove();
    $("#alumnoTable tbody").html(trs);
};

var getAlumno = function (id) {
    $.ajax({
        url: "alumno/getalumno",
        type: "POST",
        async: true,
        dataType: 'json',
        data: {id_alumno: id},
        success: function (response) {
            var alumno = response;
            if (!isArrayEmpty(alumno)) {
                $("#m_id_alumno").val(alumno["id_alumno"]);
                $("#m_cod_alumno").val(alumno["cod_alumno"]);
                $("#m_nombre").val(alumno["nombre"]);
                $("#m_apellido").val(alumno["apellido"]);
                $("#m_cumpleanos").val(alumno["cumpleanos"]);
                $("#m_grado").val(alumno["grado"]);
                $("#m_nivel").val(alumno["nivel"]);
                showModal();
            }
        }
    });

};

var showModal = function () {
    $("#alumnoModal").modal();
};
var closeModal = function () {
    $("#alumnoModal").modal('hide');
};
