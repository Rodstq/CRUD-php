<div class=" d-flex align-items-center gap-4 flex-column m-5">
    <div class="align-self-start align-self-start">
        <h3 class=""> Página de cadastro</h3>
    </div>

    <div class="w-50">
        <form class="p-5" action="router=Site/cadastro/" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label "> Digite seu nome</label>
                    <input class="form-control bg-dark text-light" type="text" name="nome" id="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Digite seu email</label>    
                    <input class="form-control bg-dark text-light" type="email" name="email" id="email" required>   
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label"> Digite seu telefone</label>
                    <input class="form-control bg-dark text-light" type="tel" name="tel" id="tel" required >
                </div>
           
                <div class="">
                    <button type="submit" value="enviar" class="btn btn-outline-success">Enviar</button>
                    <button type="reset" value="limpar" class="btn btn-outline-danger">Limpar</button>
                </div>
                
            </div>
        </form>
    </div>
</div>