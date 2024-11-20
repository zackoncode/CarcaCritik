<?php
        //Comecando a sessao
        session_start();
 
        //Incluindo a conexao com o banco de dados
        require_once 'conn.php';
       
        if(ISSET($_POST['critica'])){
                // configurando variaveis
                $usuario = $_POST['usuario'];
                $jogo = $_POST['jogo'];
                $nota = $_POST['nota'];
                $comentario = $_POST['comentario'];
                // Consulta para verificar se o usuário existe na tabela users
                $queryVerificaUsuario = "SELECT COUNT(*) FROM users WHERE usuario = :usuario";
                $stmtVerifica = $conn->prepare($queryVerificaUsuario);
                $stmtVerifica->bindParam(':usuario', $usuario);
                $stmtVerifica->execute();
                // Verifica se o usuário foi encontrado
                 if ($stmtVerifica->fetchColumn() > 0) {
                // Inserindo Consulta para envio da critica
                $queryCritica = "INSERT INTO `critica` (usuario, jogo, nota, comentario) VALUES(:usuario, :jogo, :nota, :comentario)";
                $stmt = $conn->prepare($queryCritica);
                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':jogo', $jogo);
                $stmt->bindParam(':nota', $nota);
                $stmt->bindParam(':comentario', $comentario);
                // Checando se a consulta foi um sucesso
                if($stmt->execute()){
                        //Configurando uma sessao 'sucesso' para salvar ou inserir a mensagem de successo.
                        $_SESSION['sucesso'] = "Critica feita com sucesso";
                        //redirecionando para critica.php
                        header('location: critica.php');
                }
        } else {
            // Usuário não encontrado, exibe mensagem de erro.
            $_SESSION['erro'] = "Usuário não encontrado. Por favor, se registre e faça login.";
            header('location: critica.php');
        }
        }
?>