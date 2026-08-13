$(document).ready(function () {
    $(document).on('click', 'a', function (event) {
        var cliente = $(this).attr('cliente');
        $('#idCliente').val(cliente);
    });
});
