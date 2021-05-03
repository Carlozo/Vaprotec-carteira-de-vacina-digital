<?php
    class Usuario {
        public function Login($Email, $Senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :Email AND senha = :Senha";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("Email", $Email);
            $sql->bindValue("Senha", md5($Senha));
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $Dado = $sql->fetch();
                
                $_SESSION['idu'] = $Dado['id_usuario'];
                return true;
            }else{
                return false;
            }
        }
        public function Cadastro($Nome, $Nasc, $Sexo, $Email, $Senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :Email";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("Email",$Email);
            $sql->execute();

            try{
                if($sql->rowCount() == 0){
                return false;
                }
                $sql = "INSERT INTO usuarios (nome,nasc,sexo,email,senha) VALUES
                (':Nome',':Nasc',':Sexo',':Email',':Senha');";

                $sql = $pdo->prepare($sql);
                $sql->bindValue("Nome",$Nome);
                $sql->bindValue("Nascimento",$Nasc);
                $sql->bindValue("Sexo",$Sexo);
                $sql->bindValue("Email",$Email);
                $sql->bindValue("Senha",$Senha); 

                $sql->execute();

            }catch(Exception $e){
                //javascript:alert($e);
                //javascript:window.location = 'cadastrar-conta.php';

            }finally{
                //javascript:alert("Cadastro feito com sucesso");
                //javascript:window.location = 'cadastrar-conta.php';
            }
        }
    }

?>