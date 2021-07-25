<?php
require_once "../../model/ConDB-class.php";
$nome = $_POST['Nome'];
$Id = $_POST['Id'];
$con = new CRUD;
if($nome != '') {
    $con->update('Aluno', 'nome=? where matricula=?', array($nome, $Id));
}else {
    echo "Não Atualiza";
}