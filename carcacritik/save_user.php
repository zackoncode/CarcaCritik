<?php
        //Comecando a sessao
        session_start();
 
        //Incluindo a conexao com o banco de dados
        require_once 'conn.php';
       
        if(ISSET($_POST['registro'])){
                // configurando variaveis
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
               
                // Inserindo Consulta para envio do registro
                $query = "INSERT INTO `users` (usuario, senha) VALUES(:usuario, :senha)";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':senha', $senha);
               
                // Checando se a consulta foi um sucesso
                if($stmt->execute()){
                        //Configurando uma session 'success' para salvar ou inserir a mensagem de sucesso.
                        $_SESSION['success'] = "Conta feita com sucesso";
 
                        //redirecionando para index.php
                        header('location: index.php');
                }
        }
?>