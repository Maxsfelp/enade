<form method="post" action="javascript:void(0)">
    <?php
    require_once "model/ConDB-class.php";

    $con = new CRUD;
    $se = $con->select('nome', 'Curso', 'where id=?', array($_GET['id']));
    $resp = $se->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="alert alert-success ok" style="display: none"></div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" placeholder="<?php echo($resp['nome']); ?>" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
        <label class="form-label">Nome Reitor</label>
        <select id="reitor" class="form-select" aria-label="Select de Professores">
            <option selected>Selecione o Reitor</option>
            <?php
                $sel=$con->select('id, nome', 'Reitor','',array());
                $all = $sel->fetchAll(PDO::FETCH_ASSOC);
                foreach ($all as $reg){
                    echo '<option value="'.$reg['id'].'">'.$reg['nome'].'</option>';
                }
            ?>
        </select>
    </div>
    <button onclick="Updatecurso(<?php echo($_GET['id']); ?>)" class="btn btn-primary">Submit</button>
</form>
