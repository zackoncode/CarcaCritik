<?php
        //Comecando a sessao
        session_start();
        //Incluindo a conexao com o banco de dados
        require_once 'conn.php';
       
        if(ISSET($_POST['login'])){
                //Configurando variaveis
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
               
                //Consulta Select que cria uma conta de mesmo valor que usuario e senha. esta consulta e para checar se o login e valido ou nao.
                $query = "SELECT COUNT(*) as count FROM `users` WHERE `usuario` = :usuario AND `senha` = :senha";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':senha', $senha);
                $stmt->execute();
                $row = $stmt->fetch();
               
                $count = $row['count'];
                if($count > 0){
                        header('location:logout.php');
                }else{
                        $_SESSION['error'] = "Usuario ou senha invalidos";
                        header('location:login.php');
                }
        }
?>