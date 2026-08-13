$(document).ready(function () {
    $("#imprimir").click(function () {
        PrintElem('#printOs');
    })

    function PrintElem(elem) {
        Popup($(elem).html());
    }

    function Popup(data) {
        var mywindow = window.open('', 'MapOs', 'height=600,width=800');
        mywindow.document.write('<html><head><title>OS | Visualizar Impressão</title>');
        mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap.min.css' />");
        mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap-responsive.min.css' />");
        mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/matrix-style.css' />");
        mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/matrix-media.css' />");
        mywindow.document.write("</head><body >");
        mywindow.document.write(data);
        mywindow.document.write("</body></html>");

        setTimeout(function () { mywindow.print(); }, 35);
        return true;
    }
});
