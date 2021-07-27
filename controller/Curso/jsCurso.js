function curso() {
    $.ajax({
        type: 'POST',
        url: "controller/Curso/Curso.php",
        data: {
            Nome: $('#nome').val(),
            NomeReitor: $('#reitor').val()
        },
        success: function(data){
            $('.ok').html("Cadastrado com sucesso! id = "+data).css({display: 'block'});
        },
        error: function(xhr, textStatus, error){
            $('.ok').html(xhr.statusText).css({color: '#f00'});
        }
    });
}

function deletCurso($e) {
    if(confirm("Deseja realmente excluir esse Curso?")) {
        $.ajax({
            type: 'POST',
            url: "controller/Curso/DeletCurso.php",
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
        alert("Curso não excluido!");
    }
}

function Updatecurso($e) {
    if(confirm("Deseja realmente atualizar esse Curso?")) {
        $.ajax({
            type: 'POST',
            url: "controller/Curso/UpdateCurso.php",
            data: {
                Nome: $('#nome').val(),
                NomeReitor: $('#reitor').val(),
                Id: $e
            },
            success: function (data) {
                $('.ok').html("Cadastrado com sucesso! id = "+data).css({display: 'block'});
            },
            error: function (xhr, textStatus, error) {
                $('.ok').html(xhr.statusText).css({color: '#f00'});
            }
        });
    }else {
        alert("Curso não atualizado!");
    }
}