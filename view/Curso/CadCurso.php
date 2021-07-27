<form method="post" action="javascript:void(0)">
    <div class="alert alert-success ok" style="display: none"></div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
        <label class="form-label">Nome Reitor</label>
        <select id="reitor" class="form-select" aria-label="Select de Professores">
            <option selected>Selecione o Reitor</option>
            <?php
                require_once "model/ConDB-class.php";

                $con = new CRUD;
                $sel=$con->select('id, nome', 'Reitor','',array());
                $all = $sel->fetchAll(PDO::FETCH_ASSOC);
                foreach ($all as $reg){
                    echo '<option value="'.$reg['id'].'">'.$reg['nome'].'</option>';
                }
            ?>
        </select>
    </div>
    <button onclick="curso()" class="btn btn-primary">Submit</button>
</form>
