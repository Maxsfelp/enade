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
            $('.ok').html(data).css({color:'#32cd32'});
        },
        error: function(xhr, textStatus, error){
            $('.ok').html(xhr.statusText).css({color: '#f00'});
        }
    });
}