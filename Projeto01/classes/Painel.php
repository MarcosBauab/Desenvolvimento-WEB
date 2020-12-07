<?php
    class Painel
    {
      public static function logado(){
        return isset($_SESSION['login']) ? true : false;
      }  

      public static function logout(){
        session_destroy();
        header('Location: '.INCLUDE_PATH_PAINEL);
      }

      public static function carregarPagina(){
        if(isset($_GET['url'])){
          $url = explode('/',$_GET['url']);
          if(file_exists('pages/'.$url[0].'.php')){
            include('pages/'.$url[0].'.php');
          } else {
            //Quando a página não existe
            header('Location: '.INCLUDE_PATH_PAINEL);
          }
        } else {
          include("pages/home.php");
        }
      }
      public static function listarUsersOnline(){
        self::limparUsers();
        $sql = Database::conectar()->prepare("SELECT * FROM `tb_admin.online`");
        $sql->execute();
        return $sql->fetchAll();
      }
      public static function limparUsers(){
        $data = date('Y-m-d H:i:s');
        $sql = Database::conectar()->exec("DELETE FROM `tb_admin.online` WHERE acao_final < '$data' - INTERVAL 1 MINUTE ");
      }

      public static function alert($tipo, $mensagem){
          if($tipo == "sucesso"){
            echo '<div class="sucesso">'.$mensagem.' <i class="fas fa-check-circle"></i></div>';
          } else if($tipo == "erro"){
            echo '<div class="erro">'.$mensagem.' <i class="fas fa-exclamation-triangle"></i></div>';
          }
      }

      public static function uploadFile($file){
        if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL."/uploads/".$file['name']))
          return $file['name'];
        else
          return false;
      }
      public static function imagemValida($img){
        if($img['type'] == 'image/png' || $img['type'] == 'image/jpg' || $img['type'] == 'image/jpeg'){
          $tamanho = intval($img['size']/1024);
          if ($tamanho < 300)
            return true;
          else
            return false;
        } else {
          return false;
        }
      }
      public static function deleteFile($file){
        //chmod (BASE_DIR_PAINEL, 0777);
        unlink("uploads/".$file);  
      }

    }
    
?>