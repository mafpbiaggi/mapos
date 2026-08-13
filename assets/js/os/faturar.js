$(document).ready(function () {
    $("#formFaturar").validate({
        rules: {
            descricao: { required: true },
            cliente: { required: true },
            valor: { required: true },
            vencimento: { required: true }
        },
        messages: {
            descricao: { required: 'Campo Requerido.' },
            cliente: { required: 'Campo Requerido.' },
            valor: { required: 'Campo Requerido.' },
            vencimento: { required: 'Campo Requerido.' }
        },
        submitHandler: function (form) {
            var dados = $(form).serialize();
            $('#btn-cancelar-faturar').trigger('click');
            $.ajax({
                type: "POST",
                url: baseUrl + "index.php/os/faturar",
                data: dados,
                dataType: 'json',
                success: function (data) {
                    if (data.result == true) {
                        window.location.reload(true);
                    }
                    else {
                        alert('Ocorreu um erro ao tentar faturar OS.');
                        $('#progress-fatura').hide();
                    }
                }
            });
            return false;
        }
    });
});

$(".money").maskMoney();
$('#recebido').click(function (event) {
    var flag = $(this).is(':checked');
    if (flag == true) {
        $('#divRecebimento').show();
    }
    else {
        $('#divRecebimento').hide();
    }
});
