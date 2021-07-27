<?php
require_once "../../model/ConDB-class.php";
$id = $_POST['Id'];
$crud=new CRUD;
print $crud->delete('Aluno','WHERE matricula=?',array($id));