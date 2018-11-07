/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

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
//                if (response.hasOwnProperty("error")) {
//                    getGrowl("Error", response["error"], "danger");
//                } else {
//                    getGrowl("Sistema", response["message"], "success");
//                    setDataTable(response["alumnos"]);
//                }
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
//        trs += "<tr>";
//        trs += "<td><input type='hidden' value='" + alumno["id_sistema"] + "'>" + alumno["codigo"] + "</td>";
//        trs += "<td>" + alumno["nombre"] + "</td>";
//        trs += "<td>" + alumno["nomb_ctrl_comercial"] + "</td>";
//        trs += "<td>" + alumno["nomb_tipo_sistema"] + "</td>";
//        trs += "<td><input type='checkbox' " + (alumno["estado"] === "1" ? "checked=''" : "") + " disabled=''></td>";
//        trs += "</tr>";
    }
//    $("#myTable tbody").html(trs);
};