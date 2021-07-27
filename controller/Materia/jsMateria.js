function materia() {
    $.ajax({
        type: 'POST',
        url: "controller/Materia/Materia.php",
        data: {
            Nome: $('#nome').val(),
            NomeProf: $('#prof').val()
        },
        success: function(data){
            $('.ok').html("Cadastrado com sucesso! id = "+data).css({display: 'block'});
        },
        error: function(xhr, textStatus, error){
            $('.ok').html(xhr.statusText).css({color: '#f00'});
        }
    });
}