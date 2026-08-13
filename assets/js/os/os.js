$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
        var os = $(this).attr('os');
        $('#idOs').val(os);
    });
});
