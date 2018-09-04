<?php
print '<hr><h5 class="text-center">';
if($count==1){
    print $count.' produto registrado';
}else{
    print $count.' produtos registrados';
}
print '</h5>';
$moeda=[
    'dolar'=>4.15,//04set2018 https://www.conversor-dolar.com.br/BRL_USD
    'euro'=>4.81//04set2018 https://www.conversor-dolar.com.br/Real_Euro
];
?>
<table id="produtos" class="table table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empresa</th>
            <th>Produto</th>
            <th>Disco</th>
            <th>RAM</th>
            <th>Preço</th>
            <th>Moeda</th>
            <th>R$</th>
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
            print '<td>'.$produto['preco'].'</td>';
            print '<td>'.$produto['moeda'].'</td>';
            if($produto['moeda']=='dolar'){
                $precoEmReais=($produto['preco']*$moeda['dolar']);
            }
            if($produto['moeda']=='euro'){
                $precoEmReais=($produto['preco']*$moeda['euro']);
            }
            if($produto['moeda']=='real'){
                $precoEmReais=$produto['preco'];
            }
            print '<td>'.round($precoEmReais,2).'</td>';
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
        "order": [[ 8, "desc" ]]
    } );
} );
</script>
