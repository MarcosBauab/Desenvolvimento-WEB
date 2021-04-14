<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/editarUser.css">
<div class="box-conteudo w100">
    <h2><i class="fas fa-user-edit"></i> Cadastrar Depoimento</h2>

    <?php
        if(isset($_POST['acao'])){
            if(Painel::insert($_POST)){
                Painel::alert('sucesso', 'Cadastro de depoimento concluído!');
            } else {
                Painel::alert('erro', 'Cadastro de depoimento não concluído!');
            }
            
        }
    ?>
                        
    <form method="POST">
        <div class="divisoria">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="divisoria">
            <label for="depoimento">Depoimento: </label>
            <textarea name="depoimento" id="depoimento"></textarea>
        </div>
        <div class="divisoria">
            <label for="data">Data: </label>
            <input type="date" name="data" id="">
        </div>    
        <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">     
        <input type="submit" name="acao" value="Cadastrar" required>
    </form>
</div>