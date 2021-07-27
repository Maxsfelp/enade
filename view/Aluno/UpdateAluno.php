<form method="post" action="javascript:void(0)">
    <div class="alert alert-success ok" style="display: none"></div>
    <div class="mb-3">
        <?php
            require_once "model/ConDB-class.php";
            $con = new CRUD;
            $sel = $con->select('nome', 'Aluno', 'where matricula=?', array($_GET['id']));
            $res = $sel->fetch(PDO::FETCH_ASSOC);
        ?>
        <label class="form-label">Name</label>
        <input type="text" <?php echo 'placeholder="'.$res['nome'].'"'; ?> class="form-control" id="nome" name="nome">
    </div>
    <button onclick="UpdateAluno(<?php echo $_GET['id']; ?>)" class="btn btn-primary">Submit</button>
</form>
