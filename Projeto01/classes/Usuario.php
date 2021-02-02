<?php
    class Usuario
    {
        public function atualizarUsuario($nome, $senha, $img){
            $sql = Database::conectar()->prepare("UPDATE `tb_admin.usuarios` SET nome=?,senha=?,img=? WHERE user = ?");
            if($sql->execute([$nome,$senha,$img, $_SESSION['user']])){
                return true;
            } else {
                return false;
            }       
        }

        public static function userExists($user){
            $sql = Database::conectar()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE user = ?");
            $sql->execute([$user]);
            return $sql->rowCount() == 1 ? true : false;
        }

        public function cadastrarUsuario($nome,$user,$senha,$cargo,$img){
            $sql = Database::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null,?,?,?,?,?)");
            $sql->execute(array($nome,$user,$senha,$cargo,$img));
        }
    }
?>