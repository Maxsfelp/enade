<?php
require_once "../../model/ConDB-class.php";
$nome = $_POST['Nome'];
$NomeReitor = $_POST['NomeReitor'];
$con = new CRUD;
echo($con->insert('Curso', 'nome=?,idReitor=?', array($nome, $NomeReitor)));
