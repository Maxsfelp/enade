<form method="post" action="javascript:void(0)">
    <div class="alert alert-success ok" style="display: none"></div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
        <label class="form-label">Nome Professor</label>
        <select id="prof" class="form-select" aria-label="Select de Professores">
            <option selected>Selecione o Professor</option>
                <?php
                require_once "model/ConDB-class.php";

                $con = new CRUD;
                $sel=$con->select('registro, nome', 'Professor','',array());
                $al = $sel->fetchAll(PDO::FETCH_ASSOC);
                foreach ($al as $reg){
                    echo '<option value="'.$reg['registro'].'">'.$reg['nome'].'</option>';
                }
            ?>
        </select>
    </div>
    <button onclick="materia()" class="btn btn-primary">Submit</button>
</form>