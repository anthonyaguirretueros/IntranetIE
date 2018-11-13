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
    var params = {
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
                console.log(response);
                if (response.hasOwnProperty("error")) {
                    getGrowl("Error", response["error"], "danger");
                } else {
                    getGrowl("Sistema", response["message"], "success");
                    clearForm('alumnoForm');
                }
            }
        });
    }
};

var modifyAlumno = function () {
    var params = {
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
                console.log(response);
                if (response.hasOwnProperty("error")) {
                    getGrowl("Error", response["error"], "danger");
                } else {
                    getGrowl("Sistema", response["message"], "success");
                    clearForm('alumnoForm');
                }
            }
        });
    }
};

var setDataTable = function (data) {
    console.log(data);
    var trs = "";
    for (var row in data) {
        var alumno = data[row];
        console.log(alumno);
        trs += "<tr>";
        trs += "<td></td>";
        trs += "</tr>";
    }
    $("#myTable tbody").html(trs);
};

var abrirModal = function () {
    $("#alumnoModal").modal();
};