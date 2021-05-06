<?php
    class Usuario {
        public function Login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dado = $sql->fetch();
                
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                return true;
            }else{
                return false;
            }
        }
        public function Cadastro($nome, $nasc, $sexo, $email, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :email";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("email",$email);
            $sql->execute();

            try{
                if($sql->rowCount() == 0){
                return false;
                }
                //$sql = "INSERT INTO usuarios (nome,nasc,sexo,email,senha) VALUES
                //(':Nome',':Nasc',':Sexo',':Email',':Senha');";

                $sql = "INSERT INTO usuarios (nome,nasc,sexo,email,senha) VALUES ('carlos',2003-05-16,'masculino','hetielpinheiro@gmail.com','aaaaaaaaaaaa');";

                $sql = $pdo->prepare($sql);
                /*$sql->bindValue("Nome",$Nome);
                $sql->bindValue("Nascimento",$Nasc);
                $sql->bindValue("Sexo",$Sexo);
                $sql->bindValue("Email",$Email);
                $sql->bindValue("Senha",$Senha); */

                $sql->execute();

            }catch(Exception $e){
                echo 'ERROR:: ' .$e->getMessage();
                //javascript:alert($e);
                //javascript:window.location = 'cadastrar-conta.php';

            }finally{
                //javascript:alert("Cadastro feito com sucesso");
                //javascript:window.location = 'cadastrar-conta.php';
            }
        }
    }

?>