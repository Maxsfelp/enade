function materia() {
    $.ajax({
        type: 'POST',
        url: "controller/Materia/Materia.php",
        data: {
            Nome: $('#nome').val(),
            NomeProf: $('#prof').val()
        },
        success: function(data){
            $('.ok').html(data).css({color:'#32cd32'});
        },
        error: function(xhr, textStatus, error){
            $('.ok').html(xhr.statusText).css({color: '#f00'});
        }
    });
}