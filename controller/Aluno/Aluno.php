<?php
require_once "../../model/ConDB-class.php";
$nome = $_POST['Nome'];
$senha = $_POST['Senha'];
$con = new CRUD;
echo($con->insert('Aluno', 'nome=?,senha=?', array($nome, $senha)));