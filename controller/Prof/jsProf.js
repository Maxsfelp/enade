function prof() {
    $.ajax({
        type: 'POST',
        url: "controller/Prof/Prof.php",
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