<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ENADE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="controller/Admin/jsAdmin.js"></script>
    <script type="text/javascript" src="controller/Aluno/jsAluno.js"></script>
    <script type="text/javascript" src="controller/Prof/jsProf.js"></script>
    <script type="text/javascript" src="controller/Materia/jsMateria.js"></script>
    <script type="text/javascript" src="controller/Reitor/jsReitor.js"></script>
    <script type="text/javascript" src="controller/Curso/jsCurso.js"></script>
    <link rel="stylesheet" href="view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
<!--            <div class="page-header">-->
<!--                <h1 class="text-success">-->
<!--                    ENADE, <small>Prepare-se!</small>-->
<!--                </h1>-->
<!--            </div>-->
            <div class="col">
                <?php
                    isset($_GET['page']) ? $page = 'view/'.$_GET['page'].'.php' : $page = 'view/home.php';
                    require_once($page);
                ?>
            </div>
        </div>
    </div>
</body>
</html>