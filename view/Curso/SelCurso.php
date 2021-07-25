<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Curso</th>
            <th scope="col">Reitor</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once "model/ConDB-class.php";
            $con=new CRUD;
            $sel = $con->select('*', 'Curso', '', array());
            $all = $sel->fetchAll(PDO::FETCH_ASSOC);
            foreach ($all as $reg){
        ?>
        <tr>
            <th scope="row"><?php echo($reg['id']); ?></th>
            <td><?php echo($reg['nome']); ?></td>
            <td>
                <?php
                    $resp = $con->select('nome', 'Reitor', 'where id=?', array($reg['idReitor']));
                    $re = $resp->fetch(PDO::FETCH_ASSOC);
                    echo($re['nome']);
                ?>
            </td>
            <td>
                <a <?php echo 'href="?page=Curso/UpdateCurso&&id='.$reg['id'].'"'; ?>' class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                        <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                    </svg>
                </a>
                <button type="button" onclick="deletCurso(<?php echo($reg['id']); ?>)" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
                </button>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
<a href="?page=Curso/CadCurso" class="btn btn-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
    </svg>
    Novo
</a>