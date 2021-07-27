function admin() {
    $.ajax({
        type: 'POST',
        url: "controller/Admin/Admin.php",
        data: {
            Nome: $('#nome').val(),
            Login: $('#login').val(),
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