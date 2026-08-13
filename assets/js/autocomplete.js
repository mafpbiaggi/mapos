$(document).ready(function () {
    $("#cliente").autocomplete({
        source: baseUrl + "index.php/os/autoCompleteCliente",
        minLength: 1,
        select: function (event, ui) {
            $("#clientes_id").val(ui.item.id);
        }
    });

    $("#tecnico").autocomplete({
        source: baseUrl + "index.php/os/autoCompleteUsuario",
        minLength: 1,
        select: function (event, ui) {
            $("#usuarios_id").val(ui.item.id);
        }
    });

    $("#produto").autocomplete({
        source: baseUrl + "index.php/os/autoCompleteProduto",
        minLength: 2,
        select: function (event, ui) {
            $("#idProduto").val(ui.item.id);
            $("#estoque").val(ui.item.estoque);
            $("#preco").val(ui.item.preco);
            $("#descriProd").val(ui.item.descricao);
            $("#quantidade").focus();
        }
    });

    $("#servico").autocomplete({
        source: baseUrl + "index.php/os/autoCompleteServico",
        minLength: 2,
        select: function (event, ui) {
            $("#idServico").val(ui.item.id);
            $("#precoServico").val(ui.item.preco);
            $("#descriServico").val(ui.item.descricao);
        }
    });
});
