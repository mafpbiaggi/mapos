$(document).ready(function () {
    $("#formServicos").validate({
        rules: {
            servico: { required: true }
        },
        messages: {
            servico: { required: 'Insira um serviço' }
        },
        submitHandler: function (form) {
            var dados = $(form).serialize();

            $("#divServicos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
            $.ajax({
                type: "POST",
                url: baseUrl + "index.php/os/adicionarServico",
                data: dados,
                dataType: 'json',
                success: function (data) {
                    if (data.result == true) {
                        $("#divServicos").load(currentUrl + " #divServicos");
                        $("#descServico").val('');
                        $("#quantServico").val('');
                        $("#servico").val('').focus();
                    }
                    else {
                        alert('Ocorreu um erro ao tentar adicionar serviço.');
                    }
                }
            });
            return false;
        }
    });
});

$(document).on('click', 'span', function (event) {
    var idServico = $(this).attr('idAcao');
    if ((idServico % 1) == 0) {
        $("#divServicos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
        $.ajax({
            type: "POST",
            url: baseUrl + "index.php/os/excluirServico",
            data: "idServico=" + idServico,
            dataType: 'json',
            success: function (data) {
                if (data.result == true) {
                    $("#divServicos").load(currentUrl + " #divServicos");

                }
                else {
                    alert('Ocorreu um erro ao tentar excluir serviço.');
                }
            }
        });
        return false;
    }
});
