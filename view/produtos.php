<?php
print '<h4>';
if($count==1){
    print $count.' produto registrado';
}else{
    print $count.' produtos registrados';
}
print '</h4>';
?>
<table id="produtos" class="table table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empresa</th>
            <th>Produto</th>
            <th>Disco</th>
            <th>RAM</th>
            <th>Transferencia</th>
            <th>Preço</th>
            <th>Moeda</th>
            <th>Atualizado em</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($produtos as $produto){
            print '<tr>';
            print '<td>'.$produto['id'].'</td>';
            print '<td>'.$produto['empresa'].'</td>';
            print '<td>'.$produto['produto'].'</td>';
            print '<td>'.$produto['disco'].'</td>';
            print '<td>'.$produto['ram'].'</td>';
            print '<td>'.$produto['transferencia'].'</td>';
            print '<td>'.$produto['preco'].'</td>';
            print '<td>'.$produto['moeda'].'</td>';
            print '<td>'.$produto['updated_at'].'</td>';
            print '</tr>';
        }
        ?>
    </tbody>
</table>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#produtos').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        },
        "order": [[ 1, "asc" ]]
    } );
} );
</script>
