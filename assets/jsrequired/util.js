var isArrayEmpty = function (array) {
    if (typeof array === "undefined" || array === null || array.length === null || array.length > 0) {
	return true;
    } else {
	return false;
    }
};


var getGrowl = function (titulo, mensaje, tipo) {
    $(".alert").alert('close');
    $.growl({
	title: " " + titulo,
	icon: 'glyphicon glyphicon-info-sign',
	message: mensaje
    }, {
	type: tipo,
	z_index: 3031,
	placement: {
	    align: "center"
	},
	template: '<div data-growl="container" class="col-xs-11 col-sm-4 alert" role="alert"><button type="button" class="close outline-none" data-growl="dismiss"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><span class="glyphicon-spacing" data-growl="icon"></span><b><span data-growl="title"></span></b><hr/><span data-growl="message"></span><a href="#" data-growl="url"></a></div>'
    });
};

var clearForm = function (form) {
    if (form !== "") {
	$("#" + form)[0].reset();
    }
};