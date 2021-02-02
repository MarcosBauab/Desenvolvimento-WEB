<?php
    verificaPermissaoPagina(2);
?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/editarUser.css">
<div class="box-conteudo w100">
    <h2><i class="fas fa-user-edit"></i> Adicionar Usuário</h2>

    <?php
        if(isset($_POST['acao'])){
            $login = $_POST['login'];
            $nome = $_POST['nome'];
            $senha = $_POST['password'];
            //Usado para @input:files
            $img = $_FILES['imagem'];
            $cargo = $_POST['cargos'];

            if($login == ""){
                Painel::alert('erro', 'Cadastro sem login!');
            } else if($nome == ''){
                Painel::alert('erro', 'Cadastro sem nome!');
            } else if($senha == ''){
                Painel::alert('erro', 'Cadastro sem senha!');
            } else if($img['name'] == ''){
                Painel::alert('erro', 'Cadastro sem imagem!');
            } else {
                //Continuemos
                if($cargo >= $_SESSION['cargo']){
                    Painel::alert('erro', 'Selecione um cargo abaixo do seu!');
                } else if(!Painel::imagemValida($img)){
                    Painel::alert('erro', 'Imagem inválida!');
                } else if(Usuario::userExists($login)){
                    Painel::alert('erro', 'Login já existente!');
                } else {
                    #Podemos cadastrar
                    $classeUsuario = new Usuario();
                    $img = Painel::uploadFile($img);
                    $_SESSION['img'] = $img;
                    $classeUsuario->cadastrarUsuario($nome,$login,$senha,$cargo,$img);
                    Painel::alert('sucesso', 'Cadastro do usuário com nome "'.$login.'" concluído!');
                }
            }


            
            /*if($img['name'] != ''){
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
            }*/
        }
    ?>
                        <!-- tipo para poder imagens -->
    <form method="POST" enctype="multipart/form-data">
        <div class="divisoria">
            <label for="login">Login: </label>
            <input type="text" name="login" id="login">
        </div>
        <div class="divisoria">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="divisoria">
            <label for="password">Senha: </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="divisoria">
            <label for="cargos">Cargos: </label>
            <select name="cargos" id="cargos">
                <?php
                    foreach (Painel::$cargos as $key => $value) {
                        if($key < $_SESSION['cargo']) echo '<option value="'.$key.'">'.$value.'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="divisoria">
            <label for="imagem">Imagem: </label>
            <input type="file" name="imagem" id="imagem"> 
            <input type="hidden" name="imagem_atual">
        </div>
        <input type="submit" name="acao" value="Cadastrar" required>
    </form>
</div>