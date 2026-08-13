$(document).ready(function () {
    $("#formOs").validate({
        rules: {
            cliente: { required: true },
            tecnico: { required: true },
            dataInicial: { required: true }
        },
        messages: {
            cliente: { required: 'Campo Requerido.' },
            tecnico: { required: 'Campo Requerido.' },
            dataInicial: { required: 'Campo Requerido.' }
        },

        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    $(".datepicker").datepicker({ dateFormat: 'dd/mm/yy' });
});
