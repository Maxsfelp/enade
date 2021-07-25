function aluno() {
    $.ajax({
        type: 'POST',
        url: "controller/Aluno/Aluno.php",
        data: {
            Nome: $('#nome').val(),
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

function deletAluno($e) {
    if(confirm("Deseja realmente excluir esse Aluno?")) {
        $.ajax({
            type: 'POST',
            url: "controller/Aluno/DeletAluno.php",
            data: {
                Id: $e
            },
            success: function (data) {
                $('.ok').html(data).css({color: '#32cd32'});
            },
            error: function (xhr, textStatus, error) {
                $('.ok').html(xhr.statusText).css({color: '#f00'});
            }
        });
        location.reload();
    }else {
        alert("Aluno não excluido!");
    }
}

function UpdateAluno($e) {
    if(confirm("Deseja realmente atualizar esse Aluno?")) {
        $.ajax({
            type: 'POST',
            url: "controller/Aluno/UpdateAluno.php",
            data: {
                Nome: $('#nome').val(),
                Id: $e
            },
            success: function (data) {
                $('.ok').html(data).css({color: '#32cd32'});
            },
            error: function (xhr, textStatus, error) {
                $('.ok').html(xhr.statusText).css({color: '#f00'});
            }
        });
    }else {
        alert("Aluno não atualizado!");
    }
}