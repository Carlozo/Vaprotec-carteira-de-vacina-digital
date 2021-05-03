<?php
    class Usuario {
        public function Login($Email, $Senha){
            global $pdo;

            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $Email);
            $sql->bindValue("senha", md5($Senha));
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dado = $sql->fetch();
                
                $_SESSION['idu'] = $dado['id_usuario'];
                return true;
            }else{
                return false;
            }
        }
        public function Cadastro($Nome, $Nasc, $Sexo, $Email, $Senha){

            $sql = "SELECT * FROM usuarios WHERE email = :Email";

            $sql = $pdo->prepare($sql);
            $sql->bindValue("Email",$Email);
            $sql->execute();

            try{
                if($sql->rowCount() == 0){
                return false;
                }
                $sql = "SINTAX DO POSTGRE";

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