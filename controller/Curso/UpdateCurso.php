<?php
require_once "../../model/ConDB-class.php";
$nome = $_POST['Nome'];
$NomeReitor = $_POST['NomeReitor'];
$Id = $_POST['Id'];
$con = new CRUD;
if($nome == '' && is_numeric($NomeReitor)){
    $con->update('Curso', 'idReitor=? where id=?', array($NomeReitor, $Id));
    echo("Update Reitor");
}elseif (!is_numeric($NomeReitor) && $nome != ''){
    $con->update('Curso', 'nome=? where id=?', array($nome, $Id));
    echo("Update Nome");
}elseif ($nome == '' && !is_numeric($NomeReitor)){
    echo("Não atualiza!");
}else {
    $con->update('Curso', 'nome=?, idReitor=? where id=?', array($nome, $NomeReitor, $Id));
    echo("Update tudo");
}