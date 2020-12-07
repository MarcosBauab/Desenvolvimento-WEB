<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/editarUser.css">
<div class="box-conteudo w100">
    <h2><i class="fas fa-user-edit"></i> Editar Usuário</h2>

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
                    Painel::deleteFile($imagem_atual);
                    $img = Painel::uploadFile($img);
                    if($classeUsuario->atualizarUsuario($nome, $senha,$img)){
                        $_SESSION['img'] = $img;
                        Painel::alert('sucesso', 'Cadastro atualizado com sucesso!');
                    } else {
                        Painel::alert('erro', 'Cadastro não atualizado!');
                    }
                } else {
                    Painel::alert('erro', 'Imagem não é válida!');
                    
                }
            } else{
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
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $_SESSION['nome']; ?>" required>
        </div>
        <div class="divisoria">
            <label for="password">Senha: </label>
            <input type="password" name="password" id="password" value="<?php echo $_SESSION['password'] ?>" required>
        </div>
        <div class="divisoria">
            <label for="imagem">Imagem: </label>
            <input type="file" name="imagem" id="imagem"> 
            <input type="hidden" name="imagem_atual" value="<?php  echo $_SESSION['img']  ?> ">
        </div>
        <input type="submit" name="acao" value="Atualizar" required>
    </form>
</div>