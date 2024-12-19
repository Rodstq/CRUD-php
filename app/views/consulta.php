
<main class="d-flex align-items-center gap-4 flex-column m-5">

<div class=" align-self-start">
    <div class="">
        <h3 class="font-thin text-4xl mb-8"> Página de consulta</h3>
    </div>
</div>

<div class="w-50">
    
        <table class="table table-dark table-striped-columns ">

        <tr>
            <th> Nome </th>
            <th> E-mail </th>
            <th> Ações </th>
        </tr>
            <?php  foreach($consulta as $registro): ?>
        <tr>
            <td><?php echo $registro['nome']?></td>
            <td><?php echo $registro['email']?></td>  
            <td >
                <a class="text-light" href="?router=Site/editar/&id=<?php echo base64_encode($registro['id'])?>">Editar</a> 
                | 
                <a  class="text-danger" href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id'])?>">Deletar</a>
            </td>            
        </tr>
        <?php endforeach; ?>

        </table>
   
    
</div>

</main>