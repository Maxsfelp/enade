function reitor() {
    $.ajax({
        type: 'POST',
        url: "controller/Reitor/Reitor.php",
        data: {
            Nome: $('#nome').val(),
            Senha: $('#senha').val()
        },
        success: function(data){
            $('.ok').html("Cadastrado com sucesso! id = "+data).css({display: 'block'});
        },
        error: function(xhr, textStatus, error){
            $('.ok').html(xhr.statusText).css({color: '#f00'});
        }
    });
}