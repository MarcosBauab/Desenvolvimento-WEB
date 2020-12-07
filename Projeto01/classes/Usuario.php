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

    }
?>