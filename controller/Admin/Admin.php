<?php
    require_once "../../model/ConDB-class.php";
    $nome = $_POST['Nome'];
    $senha = $_POST['Senha'];
    $login = $_POST['Login'];
    $con = new CRUD;
    echo($con->insert('Administrador','nome=?,login=?,senha=?', array($nome,$login,$senha)));