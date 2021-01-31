<?php
    verificaPermissaoPagina(2);
?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/editarUser.css">
<div class="box-conteudo w100">
    <h2><i class="fas fa-user-edit"></i> Adicionar Usuário</h2>

    <?php
        if(isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $senha = $_POST['password'];
            //Usado para @input:files
            $img = $_FILES['imagem'];
            $imagem_atual = $_POST['imagem_atual'];
            $classeUsuario = new Usuario();
            if($img['name'] != ''){
                //Selecionou alguma imagem
                if(Painel::imagemValida($img)){
                    $img = Painel::uploadFile($img);
                    if($classeUsuario->atualizarUsuario($nome, $senha,$img)){
                        $_SESSION['img'] = $img;
                        Painel::alert('sucesso', 'Cadastro atualizado com sucesso!');
                    } else {
                        Painel::alert('erro', 'Cadastro não atualizado!');
                    }
                    Painel::deleteFile($imagem_atual);
                } else {
                    Painel::alert('erro', 'Imagem não é válida!');
                    
                }
            } else{
                $_SESSION['img'] = '';
                $img = $imagem_atual;
                if($classeUsuario->atualizarUsuario($nome, $senha,$img)){
                    Painel::alert('sucesso', 'Cadastro atualizado com sucesso!');
                } else {
                    Painel::alert('erro', 'Cadastro não atualizado!');
                }
            }
        }
    ?>
                        <!-- tipo para poder imagens -->
    <form method="POST" enctype="multipart/form-data">
        <div class="divisoria">
            <label for="login">Login: </label>
            <input type="text" name="login" id="login" required>
        </div>
        <div class="divisoria">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="divisoria">
            <label for="password">Senha: </label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="divisoria">
            <label for="imagem">Imagem: </label>
            <input type="file" name="imagem" id="imagem"> 
            <input type="hidden" name="imagem_atual">
        </div>
        <input type="submit" name="acao" value="Atualizar" required>
    </form>
</div>