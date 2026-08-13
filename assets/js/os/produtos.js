$(document).ready(function () {
    $("#formProdutos").validate({
        rules: {
            quantidade: { required: true }
        },
        messages: {
            quantidade: { required: 'Insira a quantidade' }
        },
        submitHandler: function (form) {
            var quantidade = parseInt($("#quantidade").val());
            var estoque = parseInt($("#estoque").val());
            if (estoque < quantidade) {
                alert('Você não possui estoque suficiente.');
            }
            else {
                var dados = $(form).serialize();
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                    type: "POST",
                    url: baseUrl + "index.php/os/adicionarProduto",
                    data: dados,
                    dataType: 'json',
                    success: function (data) {
                        if (data.result == true) {
                            $("#divProdutos").load(currentUrl + " #divProdutos");
                            $("#quantidade").val('');
                            $("#descProd_os").val('');
                            $("#produto").val('').focus();
                        }
                        else {
                            alert('Ocorreu um erro ao tentar adicionar produto.');
                        }
                    }
                });
                return false;
            }
        }
    });
});

$(document).on('click', 'a', function (event) {
    var idProduto = $(this).attr('idAcao');
    var quantidade = $(this).attr('quantAcao');
    var produto = $(this).attr('prodAcao');
    if ((idProduto % 1) == 0) {
        $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
        $.ajax({
            type: "POST",
            url: baseUrl + "index.php/os/excluirProduto",
            data: "idProduto=" + idProduto + "&quantidade=" + quantidade + "&produto=" + produto,
            dataType: 'json',
            success: function (data) {
                if (data.result == true) {
                    $("#divProdutos").load(currentUrl + " #divProdutos");

                }
                else {
                    alert('Ocorreu um erro ao tentar excluir produto.');
                }
            }
        });
        return false;
    }
});
