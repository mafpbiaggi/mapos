$('#tipoDocCliente').change(function () {
    if (document.getElementById('tipoDocCliente').value == "CPF") {
        $("#documento").unmask();
        $("#documento").mask("999.999.999-99");
    } else {
        $("#documento").unmask();
        $("#documento").mask("99.999.999/9999-99");
    }
});
