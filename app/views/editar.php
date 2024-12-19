<div class=" d-flex align-items-center gap-4 flex-column m-5">
    <div class="align-self-start align-self-start">
        <h3 class=""> Página de Edição de Registros</h3>
    </div>

    <div class="w-50">
        <form action="?router=Site/alterar/" method="post">
        <?php foreach($editarForm as $registro):?>
            <input type="hidden" name="id" value="<?php echo $registro['id']?>">
            <div class="mb-3">
                    <label for="nome" class="form-label"> Digite seu nome</label>
                    <input class="form-control bg-dark text-light" type="text" name="nome" id="nome"  value="<?php echo $registro['nome']?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Digite seu email</label>    
                    <input class="form-control bg-dark text-light" type="email" name="email" id="email" value="<?php echo $registro['email']?>"required>   
                </div>
           
                <div class="">
                    <button type="submit" value="enviar" class="btn btn-outline-success">Enviar</button>
                    <button type="reset" value="limpar" class="btn btn-outline-danger">Limpar</button>
                </div>
               
            </div>
        <?php endforeach; ?>
        </form>
    </div>
</div>
