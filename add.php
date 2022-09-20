<?php

include_once 'includes/header.php';

?>


<div class="row">   
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name ="nome" id="nome"></input>
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name ="sobrenome" id="sobrenome"></input>
                <label for="nome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name ="email" id="email"></input>
                <label for="nome">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name ="idade" id="idade"></input>
                <label for="nome">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar</button>
            <a href="index.php" class="btn red"> Lista de clientes</a>
        </form>
    </div>
</div>


<?php

include_once 'includes/footer.php';

?>




      