$(document).ready(function () {
    $("#formAnexos").validate({
        submitHandler: function (form) {
            //var dados = $( form ).serialize();
            var dados = new FormData(form);
            $("#form-anexos").hide('1000');
            $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
            $.ajax({
                type: "POST",
                url: baseUrl + "index.php/os/anexar",
                data: dados,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function (data) {
                    if (data.result == true) {
                        $("#divAnexos").load(currentUrl + " #divAnexos");
                        $("#userfile").val('');

                    }
                    else {
                        $("#divAnexos").html('<div class="alert fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> ' + data.mensagem + '</div>');
                    }
                },
                error: function () {
                    $("#divAnexos").html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> Ocorreu um erro. Verifique se você anexou o(s) arquivo(s).</div>');
                }

            });

            $("#form-anexos").show('1000');
            return false;
        }
    });
});

$(document).on('click', '.anexo', function (event) {
    event.preventDefault();
    var link = $(this).attr('link');
    var id = $(this).attr('imagem');
    var url = baseUrl + 'os/excluirAnexo/';
    $("#div-visualizar-anexo").html('<img src="' + link + '" alt="">');
    $("#excluir-anexo").attr('link', url + id);
    $("#download").attr('href', baseUrl + "index.php/os/downloadanexo/" + id);
});

$(document).on('click', '#excluir-anexo', function (event) {
    event.preventDefault();
    var link = $(this).attr('link');
    $('#modal-anexo').modal('hide');
    $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");

    $.ajax({
        type: "POST",
        url: link,
        dataType: 'json',
        success: function (data) {
            if (data.result == true) {
                $("#divAnexos").load(currentUrl + " #divAnexos");
            }
            else {
                alert(data.mensagem);
            }
        }
    });
});
