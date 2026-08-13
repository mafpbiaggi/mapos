$(document).ready(function () {
    $('#formCliente').validate({
        rules: {
            nomeCliente: { required: true },
            tipoDocCliente: { required: true },
            documento: { required: true },
            celular: { required: true },
            rua: { required: true },
            numero: { required: true },
            bairro: { required: true },
            cidade: { required: true },
            estado: { required: true },
            cep: { required: true }
        },
        messages: {
            nomeCliente: { required: 'Campo Requerido.' },
            tipoDocCliente: { required: 'Campo Requerido.' },
            documento: { required: 'Campo Requerido.' },
            celular: { required: 'Campo Requerido.' },
            rua: { required: 'Campo Requerido.' },
            numero: { required: 'Campo Requerido.' },
            bairro: { required: 'Campo Requerido.' },
            cidade: { required: 'Campo Requerido.' },
            estado: { required: 'Campo Requerido.' },
            cep: { required: 'Campo Requerido.' }

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
});
