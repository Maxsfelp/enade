<?php
require_once "../../model/ConDB-class.php";
$nome = $_POST['Nome'];
$NomeProf = $_POST['NomeProf'];
$con = new CRUD;
echo($con->insert('Materia', 'nome=?,regiProf=?', array($nome, $NomeProf)));
